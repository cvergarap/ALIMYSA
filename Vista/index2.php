<?php

session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:../index.php?x=2");//x=2 significa que no han iniciado sesión
if (!isset($_REQUEST['pag']))
	$pag='contenido';
if (!isset($_REQUEST['msj']))
	$msj=0;
header ("../Vista/$pag.php");

?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PRINCIPAL</title>
<script src="../Js/menu.js"> </script>
<link href="../Css/estilos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../Css/estiloMenu.css" >
</head>
<body>

<div id="divContenedor">
	<div id="divContenido"> 
	<?php include ("../Vista/$pag.php"); ?> 
	</div>
</div>
</body>
</html>
