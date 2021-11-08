<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/cursoinscritoDAO.php';

session_start();

$ciDAO = new CursoInscritoDAO();
$comentario = new CursoInscritoModel();
        
$comentario->Comentario = $_POST["comentario"];
$comentario->Id_Usuario = $_SESSION["Id_Usuario"];
$comentario->Id_Curso = $_POST["Id_Curso"];
        
echo var_dump($comentario);

if (empty($comentario->Comentario)){
    header("Location: /Proyecto-BDMM-PCI/php/views/curso.php?Id_Curso=".$comentario->Id_Curso);
}
else{
    $ciDAO->inComentario("ACMNT", $comentario);
    header("Location: /Proyecto-BDMM-PCI/php/views/curso.php?Id_Curso=".$comentario->Id_Curso);
}
exit;