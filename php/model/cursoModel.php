<?php

class CursoModel {
    public $Id_Curso;
    public $Titulo;
    public $Descripcion;
    public $Cant_Niveles;
    public $Costo;
    public $Imagen;
    public $Promedio;
    public $Activo;
    public $Id_Usuario;

    public $Nivel_Actual;
    public $Fecha_Inicio;
    public $Fecha_Reciente;
    public $Fecha_Fin;

    public function addCursoE($Titulo, $Cant_Niveles, $Descripcion, $Imagen){
        $this->Titulo = $Titulo;
        $this->Cant_Niveles = $Cant_Niveles;
        $this->Descripcion = $Descripcion;
        $this->Imagen = $Imagen;
    }

    public function addCursoA($Titulo, $Nivel_Actual, $Cant_Niveles, $Fecha_Inicio, $Fecha_Reciente, $Fecha_Fin, $Imagen){
        $this->Titulo = $Titulo;
        $this->Nivel_Actual = $Nivel_Actual;
        $this->Cant_Niveles = $Cant_Niveles;
        $this->Fecha_Inicio = $Fecha_Inicio;
        $this->Fecha_Reciente = $Fecha_Reciente;
        $this->Fecha_Fin = $Fecha_Fin;
        $this->Imagen = $Imagen;
    }

}