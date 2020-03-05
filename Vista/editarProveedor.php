<?php

require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Proveedor.php";
$objConexion=Conectarse();
$sql="select * from proveedores";	  
$proveedores = $objConexion->query($sql);

?>
<head>
<meta charset="UTF-8">
<title>Editar_Proveedores</title>
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
<h2>ACTUALIZAR PROVEEDOR</h2>

<table width="100%" border="1" align="center">
  <tr align="center" bgcolor="#2c3e50" class="texto">
		<td><strong>CODIGO<br> INTERNO <br>DEL PROVEEDOR:</strong></td>
		<td><strong>NIT:</strong></td>
		<td><strong>NOMBRE(S):</strong></td>
		<td><strong>TELEFONO:</strong></td>
		<td><strong>DIRECCION:</strong></td>
		<td><strong>CORREO:</strong></td>
		<td><strong>SELECCIONE:</strong></td>
		
	</tr>
<?php
while($proveedor=$proveedores->fetch_object())
{
?>
	<tr>
		<td><?php echo $proveedor->proIdentificacion?></td>
		<td><?php echo $proveedor->proNit?></td>
		<td><?php echo $proveedor->proNombre?></td>
		<td><?php echo $proveedor->proTel?></td>
		<td><?php echo $proveedor->proDirec?></td>
		<td><?php echo $proveedor->proEmail?></td>


		<td>
			<a href="index2.php?pag=edicionProveedor&proIdentificacion=<?php echo $proveedor->proIdentificacion?>" title="EDITAR">
			<img src="../Recursos/editarProveedor.jpg" width="50" height="50" /></a>
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
<h4><em>CARRERA 7 N&Uacute;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em><h4/>
</footer>





