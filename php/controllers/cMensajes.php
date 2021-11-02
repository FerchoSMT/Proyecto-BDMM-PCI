<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/mensajesDAO.php';

session_start();
$mensajeDAO = new mensajesDAO();

$mensaje = new mensajeModel();

$mensaje->Contenido = $_POST['contenido'];

$tipo =$_SESSION["Tipo"] ;

if($tipo== "E"){
    $mensaje->Id_Usuario_E = $tipo;
    $mensaje->Id_Usuario_A = $_POST['id_a'];
}
else{
    $mensaje->Id_Usuario_A = $tipo;
    $mensaje->Id_Usuario_E = $_POST['id_e'];
}



if (empty($mensaje->Contenido )){
    header("Location: /Proyecto-BDMM-PCI/php/views/mensajes.php");
}
else{


    $mensajeDAO->iudMensaje("SEND",$mensaje);
    header("Location: /Proyecto-BDMM-PCI/php/views/mensajes.php");
}
exit;