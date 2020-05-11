<?php
session_start();
extract($_REQUEST); //recoger todas las variables
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$idMer = $_POST['codigo'];
$sql="DELETE FROM inventariogeneral WHERE idElemento = " .$idMer;

$resultado = $objConexion->query($sql);
if ($resultado)
	header ("location:../Vista/index2.php?pag=eliminarInventario9&msj=1&$idMer");
else
	header ("location:../Vista/index2.php?pag=eliminarInventario9&msj=2&$idMer");
?>
