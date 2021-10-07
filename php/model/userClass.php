<?php

class Usuario {
    public $Id_Usuario;
    public $Tipo;
    public $Nombre;
    public $Apellido_P;
    public $Apellido_M;
    public $Genero;
    public $Fecha_Nac;
    public $Foto;
    public $Email;
    public $Contrasena;
    public $Fecha_Registro;
    public $Activo;

    public function getNombre (){
        return $this->Nombre;
    }

    public function getEmail (){
        return $this->Email;
    }

}