<?php
require_once './models/Articulos.php';
require_once './core/DataBase.php';
class HomeController{
    public function index(){
        $db = Database::getInstance()->getConnection();
        $articuloModel = new Articulos($db);

        $articulosGeneral = $articuloModel->obtenerArticulosPorSeccion(1);
        $articulosDeporte = $articuloModel->obtenerArticulosPorSeccion(2);
        $articulosNegocio = $articuloModel->obtenerArticulosPorSeccion(3);

        include __DIR__ . '/../views/home.php';
    }
}