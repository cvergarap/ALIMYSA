<?php
session_start();
extract($_REQUEST); //recoger todas las variables
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$idMie = $_POST['codigo'];
$sql="DELETE FROM dama WHERE miembroIdentificacion = " .$idMie;

$resultado = $objConexion->query($sql);
if ($resultado)
	header ("location:../Vista/index2.php?pag=eliminarDama&msj=1&$idMie");
else
	header ("location:../Vista/index2.php?pag=eliminarDama&msj=2&$idMie");
?>
