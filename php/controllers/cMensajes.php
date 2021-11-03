<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/mensajesDAO.php';


        session_start();
        $mensajeDAO = new mensajesDAO();
        
        $mensaje = new mensajeModel();
        
        $mensaje->Contenido = $_POST['contenido'];
        $mensaje->Id_Usuario_E = $_SESSION["Id"];
        $mensaje->Id_Usuario_A = $_POST['id'];
        
        if (empty($mensaje->Contenido )){
            header("Location: /Proyecto-BDMM-PCI/php/views/mensajes.php?id=" + $mensaje->Id_Usuario_A);
        }
        else{
        
        
            $mensajeDAO->iudMensaje("SEND", $mensaje);
            header("Location: /Proyecto-BDMM-PCI/php/views/mensajes.php?id=" + $mensaje->Id_Usuario_A);
        }
        exit;
