<?php
if (isset($_SESSION['user'])){
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select * from proveedores where proIdentificacion='$_REQUEST[proIdentificacion]'";
$proveedores = $objConexion->query($sql);
$resultados=$proveedores->fetch_object();
}
else
{
header("location:../index.php?x=2");
}
?>

<form id="form1" name="form1" method="post" action="../Controlador/validarEditarProveedor.php">
<head>
<meta charset="UTF-8">
<title>Actualizar_Proveedores</title>
<link rel="stylesheet" href="../Css/estilos_control_miembros.css"> 
</head>


<body>
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
<h2 align="center">ACTUALIZAR DATOS PROVEEDORES</h2>
<link rel="stylesheet" href="../Css/estilos_listar_bodega.css">
<table  border="1" align="center" bgcolor="#2c3e50" class="texto">



<tr>
<td><strong>IDENTIFICACION:</strong></td>
<td>
<input name="proNit" type="text" id="proNit"  size="37%" 
value="<?php echo $resultados->proNit?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>NOMBRE:</strong></td>
<td>
<input name="proNombre" type="text" id="proNombre"  size="37%" 
value="<?php echo $resultados->proNombre?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>TELEFONO:</strong></td>
<td>
<input name="proTel" type="text" id="proTel"  size="37%" 
value="<?php echo $resultados->proTel?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>DIRECCION:</strong></td>
<td>
<input name="proDirec" type="text" id="proDirec"  size="37%" 
value="<?php echo $resultados->proDirec?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>CORREO ELECTRONICO:</strong></td>
<td>
<input name="proEmail" type="text" id="proEmail"  size="37%" 
value="<?php echo $resultados->proEmail?>" class="form-control"/></td>
</tr>



<tr>
<td colspan="20" align="center" ><input type="submit" name="enviar" id="enviar" value="ACTUALIZAR" class="botcolored"/></td>
</tr>
</table>
<input name="proIdentificacion" type="hidden" value="<?php echo $_REQUEST['proIdentificacion']?>" />
</form>
</article> 
</body>
</section>
<footer> 
<h4><em>SOFTWARE DE ADMINISTRACI&Oacute;N INTERNA</em><h4/>
<h4><em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h4/>
<h4><em>CARRERA 7 N&Uacute;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em><h4/>
</footer>
</form>


