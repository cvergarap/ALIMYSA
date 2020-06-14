<?php
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Miembro.php";
$objConexion=Conectarse();
$sql="select * from miembros";	  
$miembros = $objConexion->query($sql);

?>
<head>
<meta charset="UTF-8">
<title>Editar_Miembros</title>
<link rel="stylesheet" href="../Css/estilos_listar_bodega2.css">
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
<li> <a href="navegacion9.php"><h3>ATRAS</h3></a>
</li>
</ul>
</nav>

<section id="contenido"> 
<article> 
<br>

<br>
<h2>ACTUALIZAR MIEMBRO</h2>

<table width="100%" border="1" align="center">
  <tr align="center" bgcolor="#2c3e50" class="texto">
		<td><strong>CODIGO<br> INTERNO <br>DEL MIEMBRO:</strong></td>
		<td><strong>NOMBRE(S):</strong></td>
		<td><strong>IDENTIFICACION:</strong></td>
		<td><strong>TELEFONO:</strong></td>
		<td><strong>DIRECCION:</strong></td>
		<td><strong>CORREO ELECTRONICO:</strong></td>
		<td><strong>FECHA NACIMIENTO:</strong></td>
		<td><strong>PROFESION:</strong></td>
		<td><strong>TIPO DE MIEMBRO:</strong></td>
		<td><strong>SERVIDOR:</strong></td>
		<td><strong>BAUTIZADO:</strong></td>
		<td><strong>LUGAR BAUTIZO:</strong></td>
		<td><strong>FECHA INGRESO:</strong></td>
		<td><strong>DISCIPULADO1:</strong></td>
		<td><strong>DISCIPULADO2:</strong></td>
		<td><strong>DISCIPULADO3:</strong></td>
		<td><strong>DISCIPULADO4:</strong></td>
		<td><strong>SELECCIONE:</strong></td>
		
	</tr>
<?php
while($miembro=$miembros->fetch_object())
{
?>
	<tr>
		<td><?php echo $miembro->idMiembro?></td>
		<td><?php echo $miembro->nomMiembro?></td>
		<td><?php echo $miembro->identMiembro?></td>
		<td><?php echo $miembro->telMiembro?></td>
		<td><?php echo $miembro->dirMiembro?></td>
		<td><?php echo $miembro->correoMiembro?></td>
		<td><?php echo $miembro->fechaNacimiento?></td>
		<td><?php echo $miembro->profMiembro?></td>
		<td><?php echo $miembro->tipMiembro?></td>
		<td><?php echo $miembro->serMiembro?></td>
		<td><?php echo $miembro->bautiMiembro?></td>
		<td><?php echo $miembro->lugMiembro?></td>
		<td><?php echo $miembro->inMiembro?></td>
		<td><?php echo $miembro->disc1Miembro?></td>
		<td><?php echo $miembro->disc2Miembro?></td>
		<td><?php echo $miembro->disc3Miembro?></td>
		<td><?php echo $miembro->disc4Miembro?></td>
		
		
		
		<td>
			<a href="index2.php?pag=edicionMiembro&idMiembro=<?php echo $miembro->idMiembro?>" title="EDITAR">
			<img src="../Recursos/editarMiembro.jpg" width="50" height="50" /></a>
		</td>
	</tr> 
 </div>
 <?php
}

?>
</table>
<br>
	</article>
  </section>
  
<footer> 
<h4><em>SOFTWARE DE ADMINISTRACI&Oacute;N INTERNA</em><h4/>
<h4><em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h4/>
<h4><em>CARRERA 7 N&Uacute;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em><h4/

</footer>

