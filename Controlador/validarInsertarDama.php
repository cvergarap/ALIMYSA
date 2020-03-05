<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require_once "../Modelo/conexionBasesDatos.php";
require "../Modelo/Dama.php";

//Creamos el objeto miembro
$objDama= new Dama();
$objDama->crearDama($_REQUEST['nombres'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['correo']);
$resultado = $objDama->agregarDama();



if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarDama&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarDama&msj=2");
	


?>




