<?php

require_once ("../dompdf/dompdf_config.inc.php");
require "../Modelo/conexionBasesDatos.php";
	mysqli_select_db("epiz_23324734_bautistaberea");
$objConexion=Conectarse();
$sql="select * from miembros";
$conex = $objConexion->query($sql);
	
	
	
	
	
	
$codigoHTML='
<html>

<body>
<head>
<h1 align="center">DATOS DE LOS MIEMBROS</h1>
<link rel="stylesheet" href="../Css/estilos_imprimir.css"> 
</head>
<table id="tituloTabla" width="100%" border="1" align="center">
	<tr align="center" bgcolor="#2c3e50" class="texto">
		<td class="tituloCol"><strong>ID</strong></td>
		<td class="tituloCol"><strong>NOMBRE</strong></td>
		<td class="tituloCol"><strong>IDENTIFICACION</strong></td>
		<td class="tituloCol"><strong>TELEFONO</strong></td>
		<td class="tituloCol"><strong>DIRECCION</strong></td>
		<td class="tituloCol"><strong>CORREO</strong></td>
		<td class="tituloCol"><strong>TIPO DEL MIEMBRO</strong></td>
		<td class="tituloCol"><strong>FOTO</strong></td>
	</tr>';
?>


<?php
while($cli=$conex->fetch_object())
	{
		$codigoHTML.='<tr>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->idMiembro;
		$codigoHTML.='</td>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->nomMiembro;
		$codigoHTML.='</td>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->identMiembro;
		$codigoHTML.='</td>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->telMiembro;
		$codigoHTML.='<tr>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->dirMiembro;
		$codigoHTML.='<tr>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->correoMiembro;
		$codigoHTML.='<tr>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->tipMiembro;
		$codigoHTML.='<tr>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->fotMiembro;
		$codigoHTML.='<tr>';
		$codigoHTML.='<td>';
?>

<?php
	};


$codigoHTML.='
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->set_paper("A4', 'landscape");
$dompdf->load_html($codigoHTML);
$dompdf->render();
$dompdf->stream("Reporte_Miembros.pdf");


?>