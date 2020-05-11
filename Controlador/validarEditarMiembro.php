<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
//Guardamos en una variable la sentencia sql que permite actualizar el cliente


echo $sql="update miembros set nomMiembro='$_REQUEST[nomMiembro]',identMiembro='$_REQUEST[identMiembro]',telMiembro='$_REQUEST[telMiembro]',dirMiembro='$_REQUEST[dirMiembro]',correoMiembro='$_REQUEST[correoMiembro]',fechaNacimiento='$_REQUEST[fechaNacimiento]',profMiembro='$_REQUEST[profMiembro]',tipMiembro='$_REQUEST[tipMiembro]',serMiembro='$_REQUEST[serMiembro]',bautiMiembro='$_REQUEST[bautiMiembro]',lugMiembro='$_REQUEST[lugMiembro]',inMiembro='$_REQUEST[inMiembro]',disc1Miembro='$_REQUEST[disc1Miembro]',disc2Miembro='$_REQUEST[disc2Miembro]',disc3Miembro='$_REQUEST[disc3Miembro]',disc4Miembro='$_REQUEST[disc4Miembro]' where idMiembro='$_REQUEST[idMiembro]'";


/*
echo $sql="update miembros set nomMiembro='$_REQUEST[nomMiembro]',identMiembro='$_REQUEST[identMiembro]',telMiembro='$_REQUEST[telMiembro]',dirMiembro='$_REQUEST[dirMiembro]',correoMiembro='$_REQUEST[correoMiembro]'where idMiembro='$_REQUEST[idMiembro]'";
*/


//Ejecutamos la consulta llamando al método query del objeto conexión y pasando la sentencia sql
$resultado=$objConexion->query($sql);


if ($resultado)
	header("location:../Vista/index2.php?pag=editarMiembro&msj=1");
else
	header("location:../Vista/index2.php?pag=editarMiembro&msj=2");
$objConexion->close();
?>