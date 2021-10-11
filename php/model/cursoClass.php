<?php

class Curso {
    public $Id_Curso;
    public $Titulo;
    public $Descripcion;
    public $Cant_Niveles;
    public $Costo;
    public $Imagen;
    public $Promedio;
    public $Activo;
    public $Id_Usuario;

    public function getNombre (){
        return $this->Nombre;
    }

    public function getEmail (){
        return $this->Email;
    }

}