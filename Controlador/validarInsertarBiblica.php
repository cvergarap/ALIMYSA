<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require_once "../Modelo/conexionBasesDatos.php";
require "../Modelo/Biblica.php";

//Creamos el objeto miembro
$objBiblica= new Biblica();
$objBiblica->crearBiblica($_REQUEST['nombres'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['correo']);
$resultado = $objBiblica->agregarBiblica();



if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarBiblica&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarBiblica&msj=2");
	


?>




