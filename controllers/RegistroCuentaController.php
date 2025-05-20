<?php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../repository/UsuarioRepository.php';
session_start();
class RegistroCuentaController{
    public function index(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nombre = $_POST['nombre'];
            $usuario = $_POST['usuario'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];

            if ($password === $password_confirm){
                $nuevoUsuario = new Usuario($nombre, $usuario, '', $email, password_hash($password, PASSWORD_DEFAULT));
                $repo = new UsuarioRepository();
                $repo->guardar($nuevoUsuario);
                $_SESSION['nombre_usuario'] = $nombre;
                echo "<div class='alert alert-success'>Usuario registrado con éxito.</div>";
                header("Location: ../trabajo2/index.php?page=home");
                exit();
            } else{
                echo "<div class='alert alert-danger'>Las contraseñas no coinciden.</div>";
            }
        }
        include __DIR__ . '/../views/RegistroCuenta.php';
    }
}

