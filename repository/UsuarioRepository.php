<?php
require_once __DIR__ . '/../core/DataBase.php';
class UsuarioRepository{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }
    public function guardar(Usuario $usuario){
        $sql = "INSERT INTO usuario (nombre, primer_apellido, segundo_apellido, email, password)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $usuario->getNombre(),
            $usuario->getPrimerApellido(),
            $usuario->getSegundoApellido(),
            $usuario->getEmail(),
            $usuario->getPassword()
        ]);
    }
    public function obtenerTodos(){
        $stmt = $this->db->query("SELECT * FROM usuario");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function obtenerPorEmail($email){
    $sql = "SELECT * FROM usuario WHERE email = ?";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
}