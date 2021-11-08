<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/Model/cursoModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/cursoDAO.php';
//ESTO ES PARA CUANDO TENGAMOS NIVELES
session_start();

$curso_id = $_POST["id_curso"];
$nivel_id = $_POST["id_nivel"];
$id_fp = $_POST["metodo"];
$id = $_SESSION['Id_Usuario'];




//recibir el curso o  nivel que se vaya a comprar por que lo vamos a mandar
$cursoDAO = new cursoDAO() ;
$curso_comprar = $cursoDAO->getCurso("CURSO",$curso_id);
//traer el nivel tambien

//metodo DAO para añadir al usuario que compro un nivel


echo "<script> alert('Compra realizada con exito'); windoe.location.href='./perfilA.php';</script>";
header("Location: /Proyecto-BDMM-PCI/php/view/curso?Id_Curso=".$id_curso);



