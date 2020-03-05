<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
//datos del miembro a ingresar
$sql="Insert nomMiembro,telMiembro,dirMiembro,correoMiembro from infantil";
$infantil=$objConexion->query($sql);
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarInfantil.php" enctype="multipart/form-data">
<head>
<meta charset="UTF-8">
<title>Registro_Miembros</title>
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
<li> <a href="navegacion4.php"><h3>ATRAS</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>
<h2>REGISTRO  DE LOS MIEMBROS DEL MINISTERIO</h2>

          <tbody>
			<tr>
            <h4 <td>Nombre:</td></h4> 
			<td><input name="nombres" type="text" id="nombres" size="53" required /></td>
            </tr>
            <tr>
              <h4 <td>Telefono de Contacto:</td></h4> 
			<td><input name="telefono" type="text" id="telefono" size="53" required /></td>
            </tr>
			<tr>
              <h4 <td>Direccion de Contacto:</td></h4> 
			<td><input name="direccion" type="text" id="direccion" size="53" required /></td>
            </tr>
			<tr>
              <h4 <td>Correo Electr&oacute;nico:</td></h4> 
			<td><input name="correo" type="text" id="correo" size="53" required /></td>
            </tr>
			<tr><br><br>
			<br>
			<br>
          </tbody>
	</article>

<article> 
<br><br><br>
<h3 align="center"><td>
  <input name="ENVIAR" value="CONFIRMAR" type="submit">

</td></h3>

    </article>
  </section>

<footer> 
<h4><em>SOFTWARE DE ADMINISTRACI&Oacute;N INTERNA</em><h4/>
<h4><em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h4/>
<h4><em>CARRERA 7 N&Uacute;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em><h4/>
</footer>

 </div>
</body>
</form>
<?php
if ($msj==1)
	echo '<p align="center" >SE HA INSERTADO UN NUEVO MIEMBRO CORRECTAMENTE';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN LA INSERCION DEL NUEVO MIEMBRO, FAVOR REVISE E INTENTE DE NUEVO';
?>


