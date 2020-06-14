<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Miembro.php";
require "../Modelo/paginar.php";
$objMiembro=new Miembro();
$miembros=$objMiembro->consultarMiembros();


$conexion = new mysqli( 'sql112.epizy.com', 'epiz_23324734','UP5pzApyKwOXK','epiz_23324734_bautistaberea');
$pagina       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
$enlaces      = ( isset( $_GET['enlaces'] ) ) ? $_GET['enlaces'] : 4;
$consulta      = "SELECT * FROM miembros ORDER by identMiembro";
$paginar  = new Paginar($conexion, $consulta);
$resultados    = $paginar->getDatos($pagina);

$que=$miembros->fetch_Array();


?><head>
<meta charset="UTF-8">
<title>Lista_Miembros</title>
<link rel="stylesheet" href="../Css/estilos_listar_miembro.css">
<link rel="stylesheet" href="../Css/pagination.css">
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
<tr> <h2 class="texto">LISTADO DE MIEMBROS</h2>
</article> 

<article> 
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
		<td id="tb_fechaNacimiento"><?php echo $resultados->miembros[$i]["fechaNacimiento"]?></td>
		<td id="tb_profMiembro"><?php echo $resultados->miembros[$i]["profMiembro"]?></td>
		<td id="tb_tipMiembro"><?php echo $resultados->miembros[$i]["tipMiembro"]?></td>
		<td id="tb_serMiembro"><?php echo $resultados->miembros[$i]["serMiembro"]?></td>
		<td id="tb_bautiMiembro"><?php echo $resultados->miembros[$i]["bautiMiembro"]?></td>
		<td id="tb_lugMiembro"><?php echo $resultados->miembros[$i]["lugMiembro"]?></td>
		<td id="tb_inMiembro"><?php echo $resultados->miembros[$i]["inMiembro"]?></td>
		<td id="tb_disc1Miembro"><?php echo $resultados->miembros[$i]["disc1Miembro"]?></td>
		<td id="tb_disc2Miembro"><?php echo $resultados->miembros[$i]["disc2Miembro"]?></td>
		<td id="tb_disc3Miembro"><?php echo $resultados->miembros[$i]["disc3Miembro"]?></td>
		<td id="tb_disc4Miembro"><?php echo $resultados->miembros[$i]["disc4Miembro"]?></td>
		<td id="tb_fotMiembro"><?php echo "<img src=".$resultados->miembros[$i]["fotMiembro"]." width=70px title=Logo_Miembro>" ?></td>
	</tr>
	<?php endfor; ?>







</table>
</article> 
	<ul class="pagination">
		<?php echo $paginar->crearLinks($enlaces); ?>
	</ul>
</section>
<footer> 
<h4><em>SOFTWARE DE ADMINISTRACI&Oacute;N INTERNA</em><h4/>
<h4><em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h4/>
<h4><em>CARRERA 7 N&Uacute;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em><h4/>
</footer>