<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_4</title>
<link rel="stylesheet" href="../Css/estilos_exis_bodega.css"> 
</head>


<body>
<div id="contenedor">
<header> 
<h2><img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/logo.jpg"> <h2/><h2> <em> BUENAS PR&Aacute;CTICAS DE MANUFACTURA</em><h2/>
</header>

<nav> 
<div id="header">
<ul class="nav">
<li> <a href="salir.php"><h3>Salir</h3></a>
</li>
<li> <a href="materialEstudio.php"><h3>Inicio</h3></a>
</li>
<li> <a href="materialEstudio3.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>
<h2><em>¿QUÉ SON LAS BUENAS PRÁCTICAS DE MANUFACTURA?</em></h2>

          <tbody>
          <tr>
            <h4> <td>* Las buenas prácticas son una serie de consideraciones a tener en cuenta en las diferentes etapas del proceso, la cuales son exigencia según la Resolución 2674 del 2013.</td></h4>
			<br>
<br>
            <h4> <td>* Las BPM involucran 5 aspectos importantes:</td></h4>
			            <h4> <td>1. MATERIA PRIMA.</td></h4>
									            <h4> <td>2. OPERARIOS.</td></h4>
															            <h4> <td>3. PRODUCTO FINAL.</td></h4>
																					            <h4> <td>4. EQUIPOS, UTENSILIOS Y MATERIAL DE EMPAQUE.</td></h4>
																											            <h4> <td>5. PREPARACIÓN DE PLANES Y PROGRAMAS. (Programa de limpieza y desinfección, Programa de control de plagas, Programa de residuos, Plan de capacitación).</td></h4>
            </tr><br><br>
			<h2><img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/04.jpg"> <h2/>
          </tbody>
	</article>

<article> 


    </article>
	<article> 
<BR>
		<a href="materialEstudio5.php">SIGUIENTE</a>
    </article>
  </section>

<footer> 
<h4><em>BPM COMPANY</em><h4/>
<h4><em>PEREIRA RDA. TELEFONO: (313) 7073646</em><h4/>
<h4><em>EMAIL: bpmalimentospereira@gmail.com</em><h4/>
</footer>

</div>
</body>
</form>
<?php

?>


