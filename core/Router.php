<?php
class Router{
    public function route(){
        $page = $_GET['page'] ?? 'home';
        $controllerName = ucfirst($page) . 'Controller';
        $controllerFile = __DIR__ . "/../controllers/{$controllerName}.php";

        if (file_exists($controllerFile)){
            require_once $controllerFile;
            $controller = new $controllerName();
            $controller->index();
        } else{
            header("HTTP/1.0 404 Not Found");
            echo "Página no encontrada.";
        }
    }
}