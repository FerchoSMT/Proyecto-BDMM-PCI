<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/cursoinscritoDAO.php';

session_start();

$ciDAO = new CursoInscritoDAO();
$ci = new CursoInscritoModel();

if (isset($_POST["curso"])) {
    $ci->Nivel_Actual = $_POST["na"];
    $ci->Forma_Pago = $_POST["fp"];
    $ci->Id_Usuario = $_SESSION["Id_Usuario"];
    $ci->Id_Curso = $_POST["curso"];
}
else{
    $ci->Nivel_Actual = $_GET["na"];
    $ci->Forma_Pago = $_GET["fp"];
    $ci->Id_Usuario = $_SESSION["Id_Usuario"];
    $ci->Id_Curso = $_GET["curso"];
}

echo var_dump($ci);

$ciDAO->inCursoInscrito("ADNIV", $ci);

header("Location: /Proyecto-BDMM-PCI/php/views/curso.php?Id_Curso=".$ci->Id_Curso);
exit();