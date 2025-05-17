<?php
class Usuario{
    private $nombre, $primerApellido, $segundoApellido, $email, $password;
    public function __construct($nombre, $primerApellido, $segundoApellido, $email, $password){
        $this->nombre = $nombre;
        $this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->email = $email;
        $this->password = $password;
    }
    public function getNombre() {return $this->nombre;}
    public function getPrimerApellido() {return $this->primerApellido;}
    public function getSegundoApellido() {return $this->segundoApellido;}
    public function getEmail() {return $this->email;}
    public function getPassword() {return $this->password;}
}
