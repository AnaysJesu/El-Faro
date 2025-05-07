<?php
public class Articulos{
    public int $id;
    public string $titulo;
    public string $descripcion;
    public string $linkImagen;       
    public function __construct(int $id, string $titulo, string $descripcion, string $linkImagen){
        $this->id          = $id;
        $this->titulo      = $titulo;
        $this->descripcion = $descripcion;
        $this->link_imagen = $linkImagen;
    }
        return null;
}
