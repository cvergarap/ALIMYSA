<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Proveedor.php";
require "../Modelo/paginar10.php";
$objProveedor=new Proveedor();
$proveedores=$objProveedor->consultarProveedores();


$conexion = new mysqli( 'sql112.epizy.com', 'epiz_23324734','UP5pzApyKwOXK','epiz_23324734_bautistaberea');
$pagina       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
$enlaces      = ( isset( $_GET['enlaces'] ) ) ? $_GET['enlaces'] : 4;
$consulta      = "SELECT * FROM proveedores ORDER by proIdentificacion";
$paginar10  = new Paginar10($conexion, $consulta);
$resultados    = $paginar10->getDatos($pagina);

$que=$proveedores->fetch_Array();


?><head>
<meta charset="UTF-8">
<title>Lista_Proveedores</title>
<link rel="stylesheet" href="../Css/estilos_listar_ministerio.css">
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
<tr> <h2 class="texto">LISTADO DE PROVEEDORES</h2>
</article> 

<article> 
<table width="100%" border="1" align="center">
  <tr align="center" bgcolor="#2c3e50" class="texto">
		<td><strong>CODIGO<br> INTERNO <br>DEL PROVEEDOR:</strong></td>
		<td><strong>NIT:</strong></td>
		<td><strong>NOMBRE:</strong></td>
		<td><strong>TELEFONO:</strong></td>
		<td><strong>DIRECCION:</strong></td>
		<td><strong>CORREO:</strong></td>
		<td><strong>LOGO:</strong></td>
		
	</tr>
	
	<?php for( $i = 0; $i < count($resultados->proveedores); $i++ ): ?>
	
	<tr>
		<td id="tb_proIdentificacion"><?php echo $resultados->proveedores[$i]["proIdentificacion"]?></td>
		<td id="tb_proNit"><?php echo $resultados->proveedores[$i]["proNit"]?></td>
		<td id="tb_proNombre"><?php echo $resultados->proveedores[$i]["proNombre"]?></td>
		<td id="tb_proTel"><?php echo $resultados->proveedores[$i]["proTel"]?></td>
		<td id="tb_proDirec"><?php echo $resultados->proveedores[$i]["proDirec"]?></td>
		<td id="tb_proEmail"><?php echo $resultados->proveedores[$i]["proEmail"]?></td>
		<td id="tb_proImagen"><?php echo "<img src=".$resultados->proveedores[$i]["proImagen"]." width=100px title=Logo_Proveedor>" ?></td>
	</tr>
	<?php endfor; ?>



</table>
</article> 
	<ul class="pagination">
		<?php echo $paginar10->crearLinks($enlaces); ?>
	</ul>
</section>
<footer> 
<h4><em>SOFTWARE DE ADMINISTRACI&Oacute;N INTERNA</em><h4/>
<h4><em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h4/>
<h4><em>CARRERA 7 N&Uacute;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em><h4/>
</footer>