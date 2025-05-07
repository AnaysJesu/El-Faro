<?php
public class Seccion{
    public int $id;
    public string $nombre;
    public bool $estado;
    
    public function __construct(int $id, string $nombre, bool $estado){
        $this->id     = $id;
        $this->nombre = $nombre;
        $this->estado = $estado;
    }
        return null;
}