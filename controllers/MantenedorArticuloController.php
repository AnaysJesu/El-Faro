<?php
require_once './models/Articulos.php';
require_once './core/DataBase.php';
     class MantenedorArticuloController{
    public function index(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $db = Database::getInstance()->getConnection();
            $articuloModel = new Articulos($db);

            $titulo = $_POST['titulo'] ?? '';
            $descripcion = $_POST['descripcion'] ?? '';
            $imagen = $_POST['imagen'] ?? '';
            $id_seccion = $_POST['seccion'] ?? 1;
            $id_usuario_creacion = $_POST['id_usuario_creacion'] ?? 1; 

            $resultado = $articuloModel->insertarArticulo($titulo, $descripcion, $imagen, $id_seccion, $id_usuario_creacion);

            echo $resultado
                ? "<div class='alert alert-success'>Artículo insertado correctamente.</div>"
                : "<div class='alert alert-danger'>Error al insertar el artículo.</div>";
        }
            include './views/mantenedorArticulo.php';
    }
}