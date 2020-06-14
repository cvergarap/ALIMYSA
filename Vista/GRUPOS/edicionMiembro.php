<?php
if (isset($_SESSION['user'])){
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select * from miembros where idMiembro='$_REQUEST[idMiembro]'";
$miembros = $objConexion->query($sql);
$resultados=$miembros->fetch_object();
}
else
{
header("location:../index.php?x=2");
}
?>

<form id="form1" name="form1" method="post" action="../Controlador/validarEditarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Actualizar_Miembros</title>
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
<h2 align="center">ACTUALIZAR DATOS MIEMBROS</h2>
<link rel="stylesheet" href="../Css/estilos_listar_bodega.css">
<table  border="1" align="center" bgcolor="#2c3e50" class="texto">

<tr>
<td><strong>NOMBRE:</strong></td>
<td>
<input name="nomMiembro" type="text" id="nomMiembro"  size="37%" 
value="<?php echo $resultados->nomMiembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>IDENTIFICACION:</strong></td>
<td>
<input name="identMiembro" type="text" id="identMiembro"  size="37%" 
value="<?php echo $resultados->identMiembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>TELEFONO:</strong></td>
<td>
<input name="telMiembro" type="text" id="telMiembro"  size="37%" 
value="<?php echo $resultados->telMiembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>DIRECCION:</strong></td>
<td>
<input name="dirMiembro" type="text" id="dirMiembro"  size="37%" 
value="<?php echo $resultados->dirMiembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>CORREO ELECTRONICO:</strong></td>
<td>
<input name="correoMiembro" type="text" id="correoMiembro"  size="37%" 
value="<?php echo $resultados->correoMiembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>FECHA NACIMIENTO:</strong></td>
<td>
<input name="fechaNacimiento" type="text" id="fechaNacimiento"  size="37%" 
value="<?php echo $resultados->fechaNacimiento?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>PROFESION:</strong></td>
<td>
<input name="profMiembro" type="text" id="profMiembro"  size="37%" 
value="<?php echo $resultados->profMiembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>TIPO DE MIEMBRO:</strong></td>
<td>
<input name="tipMiembro" type="text" id="tipMiembro"  size="37%" 
value="<?php echo $resultados->tipMiembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>SERVIDOR:</strong></td>
<td>
<input name="serMiembro" type="text" id="serMiembro"  size="37%" 
value="<?php echo $resultados->serMiembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>BAUTIZADO:</strong></td>
<td>
<input name="bautiMiembro" type="text" id="bautiMiembro"  size="37%" 
value="<?php echo $resultados->bautiMiembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>LUGAR BAUTIZO:</strong></td>
<td>
<input name="lugMiembro" type="text" id="lugMiembro"  size="37%" 
value="<?php echo $resultados->lugMiembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>FECHA INGRESO:</strong></td>
<td>
<input name="inMiembro" type="text" id="inMiembro"  size="37%" 
value="<?php echo $resultados->inMiembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>DISCIPULADO1:</strong></td>
<td>
<input name="disc1Miembro" type="text" id="disc1Miembro"  size="37%" 
value="<?php echo $resultados->disc1Miembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>DISCIPULADO2:</strong></td>
<td>
<input name="disc2Miembro" type="text" id="disc2Miembro"  size="37%" 
value="<?php echo $resultados->disc2Miembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>DISCIPULADO3:</strong></td>
<td>
<input name="disc3Miembro" type="text" id="disc3Miembro"  size="37%" 
value="<?php echo $resultados->disc3Miembro?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>DISCIPULADO4:</strong></td>
<td>
<input name="disc4Miembro" type="text" id="disc4Miembro"  size="37%" 
value="<?php echo $resultados->disc4Miembro?>" class="form-control"/></td>
</tr>

<tr>
<td colspan="20" align="center" ><input type="submit" name="enviar" id="enviar" value="ACTUALIZAR" class="botcolored"/></td>
</tr>
</table>
<input name="idMiembro" type="hidden" value="<?php echo $_REQUEST['idMiembro']?>" />
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


