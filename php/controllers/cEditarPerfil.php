<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/usuarioDAO.php';

session_start();

$usuarioDAO = new UsuarioDAO();

$user = new UsuarioModel();

$user->Nombre = $POST_['name'];
$user->Apellido_P = $POST_['fname'];
$user->Apellido_M = $POST_['lname'];
$user->Genero = $POST_['genero'];
$user->Fecha_Nac = $POST_['birthday'];
$user->Foto = $POST_['fotoPerfil'];
$user->Email = $POST_['email'];
$user->Contrasena = $POST_['password'];
$user->Foto = addslasher(file_get_contents($_FILES["default-btn"]["tmp_name"]));

$userAux = $usuarioDAO->iudUser("EDITA", $user);

if ($_SESSION["Tipo"] == "E"){
    header("Location: /Proyecto-BDMM-PCI/php/views/perfilM.php");
}
else{
    header("Location: /Proyecto-BDMM-PCI/php/views/perfilA.php");
}
exit;