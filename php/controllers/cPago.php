<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/cursoinscritoDAO.php';

session_start();

$ciDAO = new CursoInscritoDAO();
$ci = new CursoInscritoModel();

$ci->Nivel_Actual = $_GET["na"];
$ci->Forma_Pago = $_GET["fp"];
$ci->Id_Usuario = $_SESSION["Id_Usuario"];
$ci->Id_Curso = $_GET["curso"];

$ciDAO->inCursoInscrito("ADNIV", $ci);

header("Location: /Proyecto-BDMM-PCI/php/views/curso.php?Id_Curso=".$ci->Id_Curso);
exit();