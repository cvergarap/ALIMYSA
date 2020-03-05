<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
//datos del producto
$sql="Insert nombElemento, cantElemento, mediElemento from inventarioujieres";
$inventario=$objConexion->query($sql);
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarInventario1.php">
<head>
<meta charset="UTF-8">
<title>Insertar_Inventario_Ujieres</title>
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
<li> <a href="Navegacion8.php"><h3>ATRAS</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>
<h2>INGRESO DE NUEVOS ELEMENTOS A LA BODEGA UJIERES</h2>

          <tbody>
          <tr>
            <h4> <td>NOMBRE DEL PRODUCTO A INSERTAR EN EL INVENTARIO:</td></h4> 
			<td><input name="nombre" type="text" id="nombre" size="53" required /></td>
            </tr>
			<tr>
            <h4> <td>CANTIDAD DEL PRODUCTO A INGRESAR:</td></h4> 
			<td><input name="cantidad" type="text" id="cantidad" size="53" required /></td>
            </tr>
              <h4 <td>SELECCIONE LA UNIDAD DE MEDIDA DEL PRODUCTO:</td></h4> 
            </tr>
			<td><label for="medida"></label>
			<select name="medida" id="medida" style="width:100px" required>
			<option value="No">Seleccione</option>
			<option value="kilos">kilos</option>
			<option value="unidades">unidades</option>
			<option value="metros">metros</option>
			<option value="otros">otros</option>
			</select>
			</td>
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
<h4><em>SOFTWARE DE ADMINISTRACI&Otilde;N INTERNA</em><h4/>
<h4><em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h4/>
<h4><em>CARRERA 7 N&Utilde;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em><h4/>
</footer>

</div>
</body>
</form>
<?php
if ($msj==1)
	echo '<p align="center" >SE HA INSERTADO UN NUEVO PRODUCTO CORRECTAMENTE';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN LA INSERCION DEL NUEVO PRODUCTO, FAVOR REVISE E INTENTE DE NUEVO';
?>


