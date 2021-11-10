<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/Model/cursoModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/cursoDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/Model/nivelModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/nivelDAO.php';
//ESTO ES PARA CUANDO TENGAMOS NIVELES
session_start();

$curso_id = $_POST["id_curso"];
$nivel_id = $_POST["id_nivel"];
$id_fp = $_POST["metodo"];
$id = $_SESSION['Id_Usuario'];




//metodo DAO para añadir al usuario que compro un nivel
$cursoDAO->inCurso("ADNIV", $id_curso);//CAMBIAR PARA QUE TOME EL NIVEL



echo "<script> alert('Compra realizada con exito'); windoe.location.href='./perfilA.php';</script>";
header("Location: /Proyecto-BDMM-PCI/php/view/curso?Id_Curso=".$id_curso);



