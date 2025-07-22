<?php
require_once __DIR__ . '/../config/database.php';

class User {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

public function register($username, $email, $password, $is_admin = 0) {
    $sql = "INSERT INTO users (username, email, password, is_admin) VALUES (?, ?, ?, ?)";
    $stmt = $this->conn->prepare($sql);
    return $stmt->execute([
        $username,
        $email,
        password_hash($password, PASSWORD_BCRYPT),
        $is_admin
    ]);
}
    public function login($email, $password) {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
    
    public function emailExists($email) {
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$email]);
    return $stmt->rowCount() > 0;
}

}
