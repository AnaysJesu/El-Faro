<?php
         class Articulos{
    private $db;
    public function __construct($conexion){
        $this->db = $conexion;
    }
    public function insertarArticulo($titulo, $seccion, $descripcion, $imagen, $url){
        $query = $this->db->prepare("CALL sp_insertar_articulo(:titulo, :seccion, :descripcion, :imagen, :url)");
        $query->bindParam(':titulo', $titulo);
        $query->bindParam(':seccion', $seccion);
        $query->bindParam(':descripcion', $descripcion);
        $query->bindParam(':imagen', $imagen);
        $query->bindParam(':url', $url);
        return $query->execute();
    }
    public function obtenerArticulosPorSeccion($id_seccion){
        $stmt = $this->db->prepare("CALL sp_obtener_articulos_por_seccion(:id_seccion)");
        $stmt->bindParam(':id_seccion', $id_seccion, PDO::PARAM_INT);
        $stmt->execute();
    
        $articulos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor(); 
    
        return $articulos;
    }
}
