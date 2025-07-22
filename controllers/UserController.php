<?php
require_once __DIR__ . '/../models/User.php';
session_start();

class UserController {
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    public function register() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Regex check (at least 8 chars, 1 letter and 1 digit)
        if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d).{8,}$/", $password)) {
    echo "Password must be at least 8 characters and include at least one letter and one number.";
    return;
}
        // Check if email already exists
        if ($this->model->emailExists($email)) {
            echo "Error: Email already registered.";
            return;
        }

        // Proceed with registration
        if ($this->model->register($username, $email, $password)) {
            header("Location: index.php?action=login");
            exit;
        } else {
            echo "Error registering user.";
        }
    } else {
        include '../views/register.php';
    }
}


    public function login() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->model->login($email, $password);

        if ($user) {
            $_SESSION['user'] = $user;

            //  go through front controller (index.php)
            header("Location: index.php?action=dashboard");
            exit;
        } else {
            echo "Invalid email or password.";
        }
    } else {
        include '../views/login.php';
    }
}


    public function logout() {
    session_start();
    session_unset();
    session_destroy();

    // Redirect to login
    header("Location: index.php?action=login");
    exit;
}

}
