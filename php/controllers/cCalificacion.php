<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/cursoinscritoDAO.php';

session_start();

$ciDAO = new CursoInscritoDAO();
$calif = new CursoInscritoModel();
        
$calif->Calificacion = $_GET["Cal"];
$calif->Id_Usuario = $_SESSION["Id_Usuario"];
$calif->Id_Curso = $_GET["Id_Curso"];

$ciDAO->inCalificacion("ADCAL", $calif);
header("Location: /Proyecto-BDMM-PCI/php/views/curso.php?Id_Curso=".$calif->Id_Curso);
exit;