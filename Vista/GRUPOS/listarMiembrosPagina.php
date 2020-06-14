<?php
	require "../Modelo/conexionBasesDatos.php";
	require "../Modelo/paginar.php";
	require "../Modelo/miembro.php";
	$objMiembro=new Miembro();
	$miembros=$objMiembro->consultarMiembros();

	$conexion = new mysqli( 'sql112.epizy.com', 'epiz_23324734','UP5pzApyKwOXK','epiz_23324734_bautistaberea');
//	$conexion->query("SET NAMES 'utf8'");

	$pagina       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
	$enlaces      = ( isset( $_GET['enlaces'] ) ) ? $_GET['enlaces'] : 5;
	$consulta      = "SELECT * FROM miembros";

	$paginar  = new Paginar($conexion, $consulta);
	$resultados    = $paginar->getDatos($pagina);



?>

<head>
<meta charset="UTF-8">
<title>Lista_Miembros</title>
<link rel="stylesheet" href="../Css/estilos_listar_miembro.css">
<link rel="stylesheet" href="../Css/pagination.css">
</head>

<div id="contenedor">
<header> 
	<h2><img style="width: 170px; height: 120px;" alt="logo" src="../Recursos/logo.jpg"> <em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em></h2>
</header>
<div id="header">
<nav> 
<ul class="nav">
<li> <a href="salir.php"><h3>SALIR</h3></a>
</li>
<li> <a href="navegacion9.php"><h3>ATRAS</h3></a>
</li>
<li> <a href="XXXXXX.php"><h3>EXPORTAR</h3></a>
</li>
</ul>
</nav>
</div>



<section id="contenido"> 
<article> 
<h2><tr align="center" class="texto">LISTADO DE MIEMBROS</tr></h2>
</article> 

<article> 
<table width="100%" border="1" align="center">
  <tr align="center" bgcolor="#2c3e50" class="texto">
		<td><strong>CODIGO<br> INTERNO <br>DEL MIEMBRO:</strong></td>
		<td><strong>NOMBRE(S):</strong></td>
		<td><strong>IDENTIFICACION:</strong></td>
		<td><strong>TELEFONO:</strong></td>
		<td><strong>DIRECCION:</strong></td>
		<td><strong>CORREO:</strong></td>
		<td><strong>TIPO DEL MIEMBRO:</strong></td>
		<td><strong>FOTO:</strong></td>
		
	</tr>
	
	<?php for( $i = 0; $i < count($resultados->miembros); $i++ ): ?>
	
	<tr>
		<td id="tb_idMiembro"><?php echo $resultados->miembros[$i]["idMiembro"]?></td>
		<td id="tb_nomMiembro"><?php echo $resultados->miembros[$i]["nomMiembro"]?></td>
		<td id="tb_identMiembro"><?php echo $resultados->miembros[$i]["identMiembro"]?></td>
		<td id="tb_telMiembro"><?php echo $resultados->miembros[$i]["telMiembro"]?></td>
		<td id="tb_dirMiembro"><?php echo $resultados->miembros[$i]["dirMiembro"]?></td>
		<td id="tb_correoMiembro"><?php echo $resultados->miembros[$i]["correoMiembro"]?></td>
		<td id="tb_tipMiembro"><?php echo $resultados->miembros[$i]["tipMiembro"]?></td>
		<td id="tb_fotMiembro"><?php echo "<img src=".$resultados->miembros[$i]["fotMiembro"]." width=30px title=Foto_Miembro>" ?></td>
	</tr>
	<?php endfor; ?>
	

</table>
<ul class="pagination">
	<?php echo $paginar->crearLinks($enlaces); ?>
</ul>
</article> 
</section>
<footer> 
	<h4><em>SOFTWARE DE ADMINISTRACI&Oacute;N INTERNA</em></h4>
	<h4><em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em></h4>
	<h4><em>CARRERA 7 N&Uacute;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em></h4>
</footer>