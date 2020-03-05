<?php
session_start();
//extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
/* Variables que vienen del formulario: $login, $password */

/*asigno a la variable password el valor encriptado*/

$pass = md5($_POST['pass']);
$login = $_POST['login'];

$objConexion=Conectarse();
//Guardamos en una variable la sentencia sql
$sql="select * from usuarios where usuLogin = '$login' and usuPassword = '$pass'";
//$sql="select * from usuarios where usuLogin = '$login' and usuPassword = '$pass' and privilegio = '1'";
//Asignar a una variable el resultado de la consulta
$resultado=$objConexion->query($sql);
//verifico si existe el usuario
$existe = $resultado->num_rows;

if ($existe>0)  //quiere decir que los datos estan bien
{
	$sql2="select usuLogin from usuarios where usuLogin = '$login' and usuPassword = '$pass'";
	$resultado2=$objConexion->query($sql2);
	$privi = $resultado2->num_rows;
	
	if ($privi>0)
	{
		$usuario=$resultado->fetch_object();
		$_SESSION['user']= $usuario->usuLogin;
		$validacion[0]= $usuario->idUsuario;
		$validacion[1]= $usuario->usuLogin;
		$validacion[2]= $usuario->privilegio;
		
		switch	($validacion[0])
		{
			/*admin*/		case 1: header ("location:../Vista/navegacion9.php"); break;
			/*contador*/	case 2: header ("location:../Vista/navegacion10.php"); break;
			/*secretaria*/	case 3: header ("location:../Vista/navegacion9.php"); break;
			/*jovenes*/		case 4: header("location:../Vista/navegacion5.php"); break;
			/*damas*/		case 5: header("location:../Vista/navegacion2.php"); break;
			/*infantiles*/	case 6: header("location:../Vista/navegacion4.php"); break;
			/*escubiblica*/	case 7: header("location:../Vista/navegacion3.php"); break;
			/*alabanza*/	case 8: header("location:../Vista/navegacion1.php"); break;
			/*ujieres*/		case 9: header("location:../Vista/navegacion8.php"); break;
			/*samaritano*/	case 10: header("location:../Vista/navegacion7.php"); break;
			/*logistica*/	case 11: header("location:../Vista/navegacion6.php"); break;
			/*invgeneral*/	case 12: header("location:../Vista/navegacion15.php"); break;
			/*sin definir*/	case 13: echo "Privilegio del usuario = 2"; break;
			/*por defecto*/	default: header("location:../Vista/sesionError.php");
		}
	}
	else
	{
		header("location:../Vista/sesionError.php?&error=1345"); 
	}
}

else
	{
		header("location:../Vista/sesionError.php?&error=1345"); 
	}
?>