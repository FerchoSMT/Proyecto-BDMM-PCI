<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/usuarioDAO.php';

session_start();

$id_curso = $_GET["curso"];
$id_user = $_SESSION["Id_Usuario"];

//Metodo DAO para agregar al usuario a un curso como comprador
$cursoDAO = new cursoDAO();

$cursoDAO->inCurso($opc, $id_curso);
//$cursoDAO->addUser($id_curso,$id_user);

header("Location: /Proyecto-BDMM-PCI/php/view/curso?Id_Curso=".$id_curso);
