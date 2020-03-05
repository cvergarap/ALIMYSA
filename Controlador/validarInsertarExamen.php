<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Examen.php";

//Creamos el objeto examen
$objExamen= new Examen();
$objExamen->crearExamen($_REQUEST['codigo'],$_REQUEST['nombres'],$_REQUEST['nit'],$_REQUEST['telefono'],$_REQUEST['correo'],$_REQUEST['pregunta1'],$_REQUEST['pregunta2'],$_REQUEST['pregunta3'],$_REQUEST['pregunta4'],$_REQUEST['pregunta5'],$_REQUEST['pregunta6'],$_REQUEST['pregunta7'],$_REQUEST['pregunta8'],$_REQUEST['pregunta9'],$_REQUEST['pregunta10'],$_REQUEST['pregunta11'],$_REQUEST['pregunta12'],$_REQUEST['pregunta13'],$_REQUEST['pregunta14']);


$resultado = $objExamen->agregarExamen();
if ($resultado)
	header ("location:../Vista/index2.php?pag=examenFinal&msj=1");
else
	header ("location:../Vista/index2.php?pag=examenFinal&msj=2");

?>




