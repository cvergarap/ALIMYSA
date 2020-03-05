<?php

require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql="select * from inventariosamaritano LIMIT 15";	
$inventarioBodega = $objConexion->query($sql);



?><head>
<meta charset="utf-8">
<title>Ver_Inventario_Samaritano</title>
<link rel="stylesheet" href="../Css/estilos_listar_bodega.css">
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
<li> <a href="navegacion7.php"><h3>ATRAS</h3></a>
</li>
<li> <a href="reportePDF11.php"><h3>EXPORTAR</h3></a>
</li>
</ul>
</nav>

<section id="contenido"> 
<article> 
<br>
<br>
<h2>INVENTARIO ACTUAL EN BODEGA EL BUEN SAMARITANO</h2>

<table width="auto" border="1" align="center">
  <tr align="center" bgcolor="#2c3e50" class="texto">
		<td><strong>ID</strong></td>
		<td><strong>NOMBRE DEL ELEMENTO</strong></td>
		<td><strong>CANTIDAD EXISTENTE EN BODEGA</strong></td>
		<td><strong>UNIDAD DE MEDIDA</strong></td>


</tr>
<?php
while($material=$inventarioBodega->fetch_object())
{
?>
	<tr>
		<td><?php echo $material->idElemento?></td>
		<td><?php echo $material->nombElemento?></td>
		<td><?php echo $material->cantElemento?></td>
		<td><?php echo $material->mediElemento?></td>

	</tr> 
 </div>
 <?php
}

?>

</table>

	</article>
  </section>
<footer> 
<h4><em>SOFTWARE DE ADMINISTRACI&Otilde;N INTERNA</em><h4/>
<h4><em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h4/>
<h4><em>CARRERA 7 N&Utilde;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em><h4/>
</footer>




