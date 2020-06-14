<?php

Conectarse();

function Conectarse ()

{
//$Conexion=new MySQLi("sql206.epizy.com","epiz_24958921","6ahlBnMvE6ki","epiz_24958921_alimentosbpm");
$Conexion=new MySQLi("localhost","root","","bpm_db");

if ($Conexion->connect_error)
	echo 'Problema con la conexion'.$conexion->connect_error;

else
	//echo 'Conexion Correcta';
	return $Conexion;

}


?>