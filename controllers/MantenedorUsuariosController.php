<?php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../repository/UsuarioRepository.php';
class MantenedorUsuariosController{
    public function guardar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nombre = $_POST['nombre'] ?? '';
            $primerApellido = $_POST['primerApellido'] ?? '';
            $segundoApellido = $_POST['segundoApellido'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $usuario = new Usuario($nombre, $primerApellido, $segundoApellido, $email, $password);
            $repo = new UsuarioRepository();
            $repo->guardar($usuario);
            header('Location: index.php?controller=MantenedorUsuarios&action=mostrar');
            exit();
        }
    }
    public function mostrar(){
        require_once __DIR__ . '/../views/home.php';
    }
}