<?php

require_once ("../dompdf/dompdf_config.inc.php");
require "../Modelo/conexionBasesDatos.php";
	mysqli_select_db("epiz_23324734_bautistaberea");
$objConexion=Conectarse();
$sql="select * from inventarioujieres";
$conex = $objConexion->query($sql);
	
	
	
	
	
	
$codigoHTML='
<html>

<body>
<head>
<h1 align="center">INVENTARIO EN LA BODEGA UJIERES</h1>
<link rel="stylesheet" href="../Css/estilos_imprimir.css"> 
</head>
<table id="tituloTabla" width="100%" border="1" align="center">
	<tr align="center" bgcolor="#2c3e50" class="texto">
		<td class="tituloCol"><strong>ID</strong></td>
		<td class="tituloCol"><strong>ELEMENTO</strong></td>
		<td class="tituloCol"><strong>CANTIDAD EXISTENTE EN BODEGA</strong></td>
		<td class="tituloCol"><strong>UNIDAD DE MEDIDA</strong></td>
	</tr>';
?>


<?php
while($cli=$conex->fetch_object())
	{
		$codigoHTML.='<tr>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->idElemento;
		$codigoHTML.='</td>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->nombElemento;
		$codigoHTML.='</td>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->cantElemento;
		$codigoHTML.='</td>';
		$codigoHTML.='<td>';
		$codigoHTML.=$cli->mediElemento;
		$codigoHTML.='</td>';
		$codigoHTML.='</tr>';
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
$dompdf->stream("Reporte_Inventario_Bodega.pdf");


?>