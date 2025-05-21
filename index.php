<?php
session_start();

$page = $_GET['page'] ?? 'registroCuenta';

if (!isset($_SESSION['nombre_usuario']) && $page !== 'registroCuenta' && $page !== 'login') {
    header("Location: index.php?page=registroCuenta");
    exit();
}

switch ($page) {
    case 'registroCuenta':
        require_once 'controllers/RegistroCuentaController.php';
        $controller = new RegistroCuentaController();
        $controller->index();
        break;

    case 'login':
        require_once 'controllers/LoginController.php';
        $controller = new LoginController();
        $controller->index();
        break;

    case 'home':
        require_once 'controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;

    case 'logout':
        session_destroy();
        header("Location: index.php?page=login");
        exit();
        break;

    default:
        header("Location: index.php?page=registroCuenta");
        exit();
}