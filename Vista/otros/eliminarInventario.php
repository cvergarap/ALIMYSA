<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarInventario.php">
<head>
<meta charset="UTF-8">
<title>Eliminar_Inventario</title>
<link rel="stylesheet" href="../Css/estilos_exis_bodega.css"> 
</head>


<body>
<div id="contenedor">
<header> 
	<h2><img style="width: 150px; height: 80px;" alt="logo" src="../Recursos/logo.jpg">DISTRIBUIDORA DE HERRAMIENTAS Y MATERIALES PARA CONSTRUCCION GLOBAL</h2>
</header>

<nav> 
<div id="header">
<ul class="nav">
<li> <a href="salir.php"><h3>SALIR</h3></a>
</li>
<li> <a href="navegacion.php"><h3>ATRAS</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>
<h2>ELIMINAR HERRAMIENTAS Y MATERIALES DE BODEGA</h2>

          <tbody>
          <tr>
            <h4> <td>INGRESE CODIGO DEL PRODUCTO A ELIMINAR DEL INVENTARIO:</td></h4> 
			<td><input name="codigo" type="text" id="codigo" size="53" required /></td>
            </tr>
          </tbody>
	</article>

<article> 
<br>
<h3 align="center"><td>
  <input name="ENVIAR" value="CONFIRMAR" type="submit">

</td></h3>

    </article>
  </section>

<footer> 
	<h4>SOFTWARE PARA CONTROL DE INVENTARIOS</h4>
	<h4>DISTRIBUIDORA GLOBAL</h4>
</footer>

</div>
</body>
</form>
<?php
if ($msj==1)
	echo '<p align="center" >SE HA ELIMINADO UN PRODUCTO CORRECTAMENTE';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN EL BORRADO DEL PRODUCTO, FAVOR REVISE E INTENTE DE NUEVO';
?>


