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
    $totalDeporte = $articuloModel->contarArticulosPorSeccion(2);
    $totalPaginasDeporte = ceil($totalDeporte / $porPagina);
    $articulosDeporte = $articuloModel->obtenerArticulosPorSeccionPaginado(2, $porPagina, $offset);
    $totalNegocio = $articuloModel->contarArticulosPorSeccion(3);
    $totalPaginasNegocio = ceil($totalNegocio / $porPagina);
    $articulosNegocio = $articuloModel->obtenerArticulosPorSeccionPaginado(3, $porPagina, $offset);
        include __DIR__ . '/../views/home.php';
    }
}