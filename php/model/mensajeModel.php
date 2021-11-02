<?php

class mensajeModel{
    public $Id_Mensaje;
    public $Fecha_Hora;
    public $Contenido;
    public $Id_Usuario_E;
    public $Id_Usuario_A;


    public function addMessageID($Id_Mensaje){
        $this->Id_Mensaje = $Id_Mensaje;
    }

    public function addMessage($Id_Mensaje,$Fecha_Hora,$Contenido,$Id_Usuario_E,$Id_Usuario_A){
        $this->Id_Mensaje = $Id_Mensaje;
        $this->Fecha_Hora = $Fecha_Hora;
        $this->Contenido = $Contenido;
        $this->Id_Usuario_E = $Id_Usuario_E;
        $this->Id_Usuario_A = $Id_Usuario_A;
    }
}