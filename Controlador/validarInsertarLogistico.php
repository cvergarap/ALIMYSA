<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require_once "../Modelo/conexionBasesDatos.php";
require "../Modelo/Logistico.php";

//Creamos el objeto miembro
$objLogistico= new Logistico();
$objLogistico->crearLogistico($_REQUEST['nombres'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['correo']);
$resultado = $objLogistico->agregarLogistico();



if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarLogistico&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarLogistico&msj=2");
	


?>




