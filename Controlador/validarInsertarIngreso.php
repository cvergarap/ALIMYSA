<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Ingreso.php";
//Creamos el objeto Ingreso
$objIngreso= new Ingreso();
$objIngreso->agregarIngreso($_REQUEST['codigo'],$_REQUEST['concepto'],$_REQUEST['valor'],$_REQUEST['fecha']);
$resultado = $objIngreso->agregarIngreso();


if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarIngresos&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarIngresos&msj=2");
?>

