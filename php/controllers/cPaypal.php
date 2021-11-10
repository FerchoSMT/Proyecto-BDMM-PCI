<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/Model/cursoModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/cursoDAO.php';

session_start();

$curso_id = $_POST["id_curso"];
$id_fp = $_POST["metodo"];//esto es para cuando seleccione el boton de paypal
$id = $_SESSION['Id_Usuario'];



$fields = [ 'cmd' => '_cart',
 'upload'=> '1',
  'business' => 'sb-sdpov8270418@business.example.com',
  'currency_code' => 'MXN',
   'lc'=>'MX',
   'rm'=>'2',
    'return'=>'http://localhost/Proyecto-BDMM-PCI/php/controllers/cPago?curso='.$curso_id->Id_Curso,
    'cancel_return' => 'http://localhost/Proyecto-BDMM-PCI/php/view/curso?Id_Curso='.$curso_id->Id_Curso,
    'notify_url' => 'http://localhost/Proyecto-BDMM-PCI/php/view/curso?Id_Curso='.$curso_id->Id_Curso
];

//recibir el curso o  nivel que se vaya a comprar por que lo vamos a mandar
$cursoDAO = new cursoDAO() ;
$curso_comprar = $cursoDAO->getCurso("CURSO",$curso_id);

//hay que hacer un foreach para llenar lo que le vamos a mandar a el fields en caso de ser multipler cosas

$fields["item_name_1"] = $curso_comprar->$Titulo;
$fields["item_number_1"] = 1;
$fields["amount_1"] = $curso_comprar->$Costo;
$fields["quantity_1"] = 1;

if($id_fp == 2){
    $query_string = http_build_query($fields);
    header("Location: https://www.sandbox.paypal.com/cgi-bin/webscr?".$query_string);
    exit();
}


echo "<script> alert('Compra realizada con exito'); windoe.location.href='./perfilA.php';</script>";
die();



