<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require_once "../Modelo/conexionBasesDatos.php";
require "../Modelo/Infantil.php";

//Creamos el objeto miembro
$objInfantil= new Infantil();
$objInfantil->crearInfantil($_REQUEST['nombres'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['correo']);
$resultado = $objInfantil->agregarInfantil();



if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarInfantil&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarInfantil&msj=2");
	


?>




