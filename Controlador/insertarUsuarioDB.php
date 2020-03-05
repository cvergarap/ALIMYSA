<?php

include_once "../Modelo/conexionBasesDatos.php";

$into= "usuLogin, usuPassword, privilegio";
$values= "'".$_GET["innumber"]."', '".$_GET["inpassword"]."', '".$_GET["option"]."'";
$query = "INSERT INTO usuarios (".$into.") VALUES (".$values.")";
//var_dump ($query); exit();

//$resultado= mysql_query($query);// or die('Error: ' . pg_last_error());
$resultado= mysql_db_query ("SELECT * FROM usuarios");

echo 'MENSAJE::  '.$resultado;
var_dump($resultado);

exit();

header ("location:../Vista/registroUsuario.php");

?>