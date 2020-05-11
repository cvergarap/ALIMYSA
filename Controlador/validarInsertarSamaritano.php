<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require_once "../Modelo/conexionBasesDatos.php";
require "../Modelo/Samaritano.php";

//Creamos el objeto miembro
$objSamaritano= new Samaritano();
$objSamaritano->crearSamaritano($_REQUEST['nombres'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['correo']);
$resultado = $objSamaritano->agregarSamaritano();



if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarSamaritano&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarSamaritano&msj=2");
	


?>




