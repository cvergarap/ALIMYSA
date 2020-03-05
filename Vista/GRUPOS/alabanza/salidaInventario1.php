<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
if (isset($_REQUEST['idElemento']))
{
	$idMerc=$_REQUEST['idElemento'];
	$sql="select * from inventarioalabanza where idElemento = '$idElemento'";
	$materialBodega = $objConexion->query($sql);
	$material=$materialBodega->fetch_object();
	$nombreMaterial= $material->nombElemento;
	$cantMaterial= $material->cantElemento;
}
else
{
	$nombreMaterial= "";
	$cantMaterial= "";
}

$msj='1,2';
?>

<form id="form1" name="form1" method="post" action="../Controlador/validarDebitarInventario1.php">
<head>
<meta charset="UTF-8">
<title>Debitar_Inventario_alabanza</title>
<link rel="stylesheet" href="../Css/estilos_exis_bodega.css"> 
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
<li> <a href="Navegacion1.php"><h3>ATRAS</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>
<h2>SALIDA DE BODEGA ALABANZA</h2>

          <tbody>
          <tr>
            <h4> <td>NOMBRE DEL PRODUCTO A DEBITAR EN EL INVENTARIO:</td></h4> 
			<td><input name="buscar" type="search" id="buscar" size="53" readonly="true" value="<?php echo $nombreMaterial ?>" required></td>
            </tr>
            <tr>
            <h4> <td>CANTIDAD DISPONIBLE:</td></h4> 
			<td><input name="disponible" id="text" size="53" readonly="true" value="<?php echo $cantMaterial ?>"></td>
            </tr>
			<tr>
            <h4> <td>CANTIDAD DEL PRODUCTO A DEBITAR:</td></h4> 
			<td><input name="cantidad" type="text" id="cantidad" size="53" required /></td>
            </tr>
          </tbody>
	</article>

<article> 
<br>
<h3 align="center"><td>
<input type="hidden" value="<?php echo $_GET['idElemento']?>" name="idElemento">
<input name="ENVIAR" value="CONFIRMAR" type="submit">
</td>
    </h3>

    </article>
  </section>

<footer> 
<h4><em>SOFTWARE DE ADMINISTRACI&Otilde;N INTERNA</em><h4/>
<h4><em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h4/>
<h4><em>CARRERA 7 N&Utilde;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em><h4/>
</footer>

</div>
</body>
</form>
<?php
if ($msj==1)
	echo '<p align="center" >SE HA DEBITADO CORRECTAMENTE';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN LA EJECUCION, FAVOR REVISE E INTENTE DE NUEVO';
?>
