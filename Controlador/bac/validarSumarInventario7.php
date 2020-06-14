<?php
session_start();
extract($_REQUEST); //recoger todas las variables y definir formula para sumar existencia
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Inventario1.php";
$objConexion=Conectarse();
$varDiferencia = 0;
$idElemento = '';
$cantidadActual = $_POST['disponible'];
$cantidadSumar =  $_POST['cantidad'];
$varDiferencia = $cantidadActual + $cantidadSumar;
$idElemento = $_POST['idElemento'];




$sql="UPDATE inventariodamas  SET  cantElemento = " . $varDiferencia . " WHERE idElemento = " .$idElemento;






$resultado = $objConexion->query($sql);
if ($resultado)
	header ("location:../Vista/index2.php?pag=ingresoInventario7&msj=1");
else
	header ("location:../Vista/index2.php?pag=ingresoInventario7&msj=2");
?>

