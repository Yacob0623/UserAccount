<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/UserController.php';

$controller = new UserController();

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->login(); // handle login logic
        } else {
            include '../views/login.php'; // show login form
        }
        break;

    case 'register':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->register(); // handle registration
        } else {
            include '../views/register.php'; // show form
        }
        break;

    case 'dashboard':
        include '../views/dashboard.php';
        break;

    case 'logout':
        $controller->logout();
        break;
     
   case 'admin_panel':
        include '../views/admin_panel.php';
        break;
   

    default:
        include '../views/login.php';
        break;
}
