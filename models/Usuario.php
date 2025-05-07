<?php
public class Usuario{
    public int $id;
    public string $nombre;
    public string $primerApellido;
    public string $segundoApellido;
    public string $email;
    public string $password

    public function __construct(int $id, string $nombre, string $primerApellido, string $segundoApellido, string $email, string $password){
        $this->id     = $id;
        $this->nombre = $nombre;
        $this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->email  = $email;
        $this->password  = $password;
    }
        return null;
}
