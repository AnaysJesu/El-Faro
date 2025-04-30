<?php
public Articulos{
    public int $id;
    public string $titulo;
    public string $descripcion;
    public string $link;     
    public string $seccion;  
    public function __construct(int $id, string $titulo, string $descripcion, string $link, string $seccion){
        $this->id          = $id;
        $this->titulo      = $titulo;
        $this->descripcion = $descripcion;
        $this->link        = $link;
        $this->seccion     = $seccion;
    }
        return null;
}
