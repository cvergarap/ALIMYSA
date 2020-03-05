<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require_once "../Modelo/conexionBasesDatos.php";
require "../Modelo/Joven.php";

//Creamos el objeto miembro
$objJoven= new Joven();
$objJoven->crearJoven($_REQUEST['nombres'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['correo']);
$resultado = $objJoven->agregarJoven();



if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarJoven&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarJoven&msj=2");
	


?>




