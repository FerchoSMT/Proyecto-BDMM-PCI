<?php

class CursoModel {
    public $Id_Curso;
    public $Titulo;
    public $Descripcion;
    public $Fecha_Creacion;
    public $Cant_Niveles;
    public $Costo;
    public $Imagen;
    public $Promedio;
    public $Vacio;
    public $Activo;
    public $Id_Usuario;

    public $Nombre_Usuario;
    public $Foto_Usuario;

    public $Nivel_Actual;
    public $Fecha_Inicio;
    public $Fecha_Reciente;
    public $Fecha_Fin;

    public function addCursoID($Id_Curso){
        $this->Id_Curso = $Id_Curso;
    }

    public function addCurso($Id_Curso, $Titulo, $Descripcion, $Fecha_Creacion, $Cant_Niveles, $Costo, $Imagen, $Promedio, $Vacio, $Activo, $Id_Usuario, $Nombre_Usuario, $Foto_Usuario){
        $this->Id_Curso = $Id_Curso;
        $this->Titulo = $Titulo;
        $this->Descripcion = $Descripcion;
        $this->Fecha_Creacion = $Fecha_Creacion;
        $this->Cant_Niveles = $Cant_Niveles;
        $this->Costo = $Costo;
        $this->Imagen = $Imagen;
        $this->Promedio = $Promedio;
        $this->Vacio = $Vacio;
        $this->Activo = $Activo;
        $this->Id_Usuario = $Id_Usuario;
        $this->Nombre_Usuario = $Nombre_Usuario;
        $this->Foto_Usuario = $Foto_Usuario;
    }

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

    public function addCursosMain($Id_Curso, $Titulo, $Descripcion, $Imagen){
        $this->Id_Curso = $Id_Curso;
        $this->Titulo = $Titulo;
        $this->Descripcion = $Descripcion;
        $this->Imagen = $Imagen;
    }

}