<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require_once "../Modelo/conexionBasesDatos.php";
require "../Modelo/Estudiante.php";

/*//CARGAMOS LA FOTO DEL FORMULARIO
$cargarLogo=$_FILES["cargararchivo"]["name"];
$rutaTmp=$_FILES["cargararchivo"]["tmp_name"];
$destinoLogo="../Recursos/prof/proveedor/".$_FILES["cargararchivo"]["name"];
//COPIAR LA FOTO DE LA RUTA TMP(DEL SERVIDOR) A LA CARPETA DE LAS FOTOS DE PERFIL
copy($rutaTmp, $destinoLogo);*/


//Creamos el objeto miembro
$objEstudiante= new Estudiante();
$objEstudiante->crearEstudiante($_REQUEST['nit'],$_REQUEST['nombres'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['correo']);
$resultado = $objEstudiante->agregarEstudiante();



if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarEstudiante&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarEstudiante&msj=2");
	


?>




