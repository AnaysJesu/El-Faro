<?php
require_once './models/Articulos.php';
require_once './core/DataBase.php';
class HomeController{
    public function index(){
        $db = Database::getInstance()->getConnection();
    $articuloModel = new Articulos($db);
    $porPagina = 6;
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $offset = ($pagina - 1) * $porPagina;
    $totalGeneral = $articuloModel->contarArticulosPorSeccion(1);
    $totalPaginasGeneral = ceil($totalGeneral / $porPagina);
    $articulosGeneral = $articuloModel->obtenerArticulosPorSeccionPaginado(1, $porPagina, $offset);
    $articulosDeporte = $articuloModel->obtenerArticulosPorSeccion(2);
    $articulosNegocio = $articuloModel->obtenerArticulosPorSeccion(3);
        include __DIR__ . '/../views/home.php';
    }
}