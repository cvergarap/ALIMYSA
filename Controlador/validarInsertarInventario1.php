<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require_once "../Modelo/conexionBasesDatos.php";
require "../Modelo/Inventario.php";

//Creamos el objeto miembro
$objInventario= new Inventario();
$objInventario->crearInventario($_REQUEST['codigo'],$_REQUEST['nombre'],$_REQUEST['cantidad'],$_REQUEST['medida']);
$resultado = $objInventario->agregarInventario();

if ($resultado)
	header ("location:../Vista/index2.php?pag=InsertarInventario&msj=1");
else
	header ("location:../Vista/index2.php?pag=InsertarInventario&msj=2");

?>

