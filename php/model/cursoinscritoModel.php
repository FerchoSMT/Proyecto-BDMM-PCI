<?php

class CursoInscritoModel {
    public $Id_CursoInscrito;
    public $Nivel_Actual;
    public $Fecha_Inicio;
    public $Fecha_Reciente;
    public $Fecha_Fin;
    public $Calificacion;
    public $Comentario;
    public $Diploma;
    public $Pago_Total;
    public $Forma_Pago;
    public $Id_Usuario;
    public $Id_Curso;

    public $Nombre_Usuario;
    public $Foto_Usuario;


    public function addCursoInscritoID($Id_CursoInscrito){
        $this->Id_CursoInscrito = $Id_CursoInscrito;
    }

    public function addCursoInscrito($Id_CursoInscrito, $Nivel_Actual, $Fecha_Inicio, $Fecha_Reciente, $Fecha_Fin, $Calificacion, $Comentario, $Diploma, $Pago_Total, $Forma_Pago, $Id_Usuario, $Id_Curso, $Nombre_Usuario, $Foto_Usuario){
        $this->Id_CursoInscrito = $Id_CursoInscrito;
        $this->Nivel_Actual = $Nivel_Actual;
        $this->Fecha_Inicio = $Fecha_Inicio;
        $this->Fecha_Reciente = $Fecha_Reciente;
        $this->Fecha_Fin = $Fecha_Fin;
        $this->Calificacion = $Calificacion;
        $this->Comentario = $Comentario;
        $this->Diploma = $Diploma;
        $this->Pago_Total = $Pago_Total;
        $this->Forma_Pago = $Forma_Pago;
        $this->Id_Usuario = $Id_Usuario;
        $this->Id_Curso = $Id_Curso;
        $this->Nombre_Usuario = $Nombre_Usuario;
        $this->Foto_Usuario = $Foto_Usuario;
    }

    public function addStatus($Nivel_Actual, $Fecha_Fin, $Calificacion, $Comentario){
        $this->Nivel_Actual = $Nivel_Actual;
        $this->Fecha_Fin = $Fecha_Fin;
        $this->Calificacion = $Calificacion;
        $this->Comentario = $Comentario;
    }

    public function addComentario($Comentario, $Id_Usuario, $Nombre_Usuario, $Foto_Usuario){
        $this->Comentario = $Comentario;
        $this->Id_Usuario = $Id_Usuario;
        $this->Nombre_Usuario = $Nombre_Usuario;
        $this->Foto_Usuario = $Foto_Usuario;
    }
}