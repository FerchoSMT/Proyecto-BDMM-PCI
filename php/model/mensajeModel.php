<?php

class mensajeModel{
    public $Id_Mensaje;
    public $Fecha_Hora;
    public $Contenido;
    public $Id_Usuario_Envia;
    public $Id_Usuario_Recibe;



    public function addMessageID($Id_Mensaje){
        $this->Id_Mensaje = $Id_Mensaje;
    }

    public function addMessage($Id_Mensaje,$Fecha_Hora,$Contenido,$Id_Usuario_Envia,$Id_Usuario_Recibe){
        $this->Id_Mensaje = $Id_Mensaje;
        $this->Fecha_Hora = $Fecha_Hora;
        $this->Contenido = $Contenido;
        $this->Id_Usuario_Envia = $Id_Usuario_Envia;
        $this->Id_Usuario_Recibe = $Id_Usuario_Recibe;
    }
}