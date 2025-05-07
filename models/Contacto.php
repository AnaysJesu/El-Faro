<?php
public class Contacto{
    public int $id;
    public string $nombre;
    public string $descripcion;
    public date $fechaContacto;
    
    public function __construct(int $id, string $nombre, string $descripcion, date $fechaContacto){
        $this->id     = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->fechaContacto = $fechaContacto;
    }
        return null;
}