<?php
session_start();
extract($_REQUEST); //recoger todas las variables
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$idMie = $_POST['codigo'];
$sql="DELETE FROM ujier WHERE miembroIdentificacion = " .$idMie;

$resultado = $objConexion->query($sql);
if ($resultado)
	header ("location:../Vista/index2.php?pag=eliminarUjier&msj=1&$idMie");
else
	header ("location:../Vista/index2.php?pag=eliminarUjier&msj=2&$idMie");
?>