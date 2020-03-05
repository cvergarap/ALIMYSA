<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Infantil.php";
$objInfantil=new Infantil();
$infantiles=$objInfantil->consultarInfantiles();
?><head>
<meta charset="UTF-8">
<title>Lista_Ministerio</title>
<link rel="stylesheet" href="../Css/estilos_listar_ministerio.css">
</head>

<div id="contenedor">
<header> 
<h2><img style="width: 170px; height: 120px;" alt="logo" src="../Recursos/logo.jpg"> <em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h2/>
</header>
<nav> 
<div id="header">
<ul class="nav">
<li> <a href="salir.php"><h3>SALIR</h3></a>
</li>
<li> <a href="navegacion4.php"><h3>ATRAS</h3></a>
</li>
</ul>
</nav>

<section id="contenido"> 
<article> 
<h2>LISTADO DE MIEMBROS DEL MINISTERIO</h2>

<table width="100%" border="1" align="center">
  <tr align="center" bgcolor="#2c3e50" class="texto">
		<td><strong>C&Oacute;DIGO</strong></td>
		<td><strong>NOMBRE(S)</strong></td>
		<td><strong>TELEFONO</strong></td>
		<td><strong>DIRECCION</strong></td>
		<td><strong>CORREO</strong></td>
	</tr>
<?php
while($registro=$infantiles->fetch_object())
{
?>
	<tr>
		<td><?php echo $registro->miembroIdentificacion?></td>
		<td><?php echo $registro->nomMiembro?></td>
		<td><?php echo $registro->telMiembro?></td>
		<td><?php echo $registro->dirMiembro?></td>
		<td><?php echo $registro->correoMiembro?></td>
	</tr>
	</form>
<?php
}//cerrando el ciclo while
?>
</table>
</article> 
</section>
<footer> 
<h4><em>SOFTWARE DE ADMINISTRACI&Oacute;N INTERNA</em><h4/>
<h4><em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h4/>
<h4><em>CARRERA 7 N&Uacute;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em><h4/>
</footer>