<?php
session_start();

require_once 'core/Router.php'; 

$page = $_GET['page'] ?? 'registroCuenta';

if (!isset($_SESSION['nombre_usuario']) && $page !== 'registroCuenta' && $page !== 'login') {
    header("Location: index.php?page=registroCuenta");
    exit();
}

$router = new Router();
$router->route();