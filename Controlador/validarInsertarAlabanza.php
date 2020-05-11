<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require_once "../Modelo/conexionBasesDatos.php";
require "../Modelo/Alabanza.php";

//Creamos el objeto miembro
$objAlabanza= new Alabanza();
$objAlabanza->crearAlabanza($_REQUEST['nombres'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['correo']);
$resultado = $objAlabanza->agregarAlabanza();



if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarAlabanza&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarAlabanza&msj=2");
	


?>




