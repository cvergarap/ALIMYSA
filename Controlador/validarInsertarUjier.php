<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require_once "../Modelo/conexionBasesDatos.php";
require "../Modelo/Ujier.php";

//Creamos el objeto miembro
$objUjier= new Ujier();
$objUjier->crearUjier($_REQUEST['nombres'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['correo']);
$resultado = $objUjier->agregarUjier();



if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarUjier&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarUjier&msj=2");
	


?>




