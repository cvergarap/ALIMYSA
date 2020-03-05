<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
//datos del ingreso a reportar
$sql="Insert conceptoIngreso,valorIngreso,fechaIngreso from ingresos";
$ingreso=$objConexion->query($sql);
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarIngreso.php" enctype="multipart/form-data">
<head>
<meta charset="UTF-8">
<title>Registro_Ingresos</title>
<link rel="stylesheet" href="../Css/estilos_control_dinero.css"> 
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
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>
<h2>REGISTRO  DE INGRESOS GENERALES</h2>

          <tbody>
          <tr>
            <h4 <td>Concepto del Ingreso a Registrar:</td></h4> 
			<td><input name="concepto" type="text" id="concepto" size="60" required /></td>
            </tr>
			<tr>
            <h4 <td>Valor del Ingreso a Registrar:</td></h4> 
			<td><input name="valor" type="text" id="valor" size="60" required /></td>
            </tr>
            <tr>
              <h4 <td>Fecha a Registrar el Ingreso:</td></h4> 
			<td><input name="fecha" type="text" id="fecha" size="60" required /></td>
            </tr>
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
	echo '<p align="center" >REGISTRO CORRECTO';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN LA INSERCION, FAVOR REVISE E INTENTE DE NUEVO';
?>


