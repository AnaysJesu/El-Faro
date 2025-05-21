<?php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../repository/UsuarioRepository.php';

class LoginController{
    public function index(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $repo = new UsuarioRepository();
            $usuario = $repo->obtenerPorEmail($email);

            if ($usuario && password_verify($password, $usuario['password'])){
                $_SESSION['nombre_usuario'] = $usuario['nombre'];
                header("Location: ../trabajo2/index.php?page=home");
                exit();
            } else{
                echo "<div class='alert alert-danger'>Correo o contraseña incorrectos.</div>";
            }
        }
        include __DIR__ . '/../views/Login.php';
    }
}