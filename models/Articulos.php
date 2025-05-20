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
    public function contarArticulosPorSeccion($seccionId){
    $query = "SELECT COUNT(*) as total FROM articulo WHERE id_seccion = :seccionId";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':seccionId', $seccionId, PDO::PARAM_INT);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado['total'];
    }
   public function obtenerArticulosPorSeccionPaginado($seccionId, $limit, $offset){
    $stmt = $this->db->prepare("SELECT * FROM articulo WHERE id_seccion = ? LIMIT ? OFFSET ?");
    $stmt->bindValue(1, $seccionId, PDO::PARAM_INT);
    $stmt->bindValue(2, $limit, PDO::PARAM_INT);
    $stmt->bindValue(3, $offset, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}
