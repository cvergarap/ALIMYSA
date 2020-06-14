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
<li> <a href="materialEstudio5.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>
<h2><em>OPERARIOS</em></h2>

          <tbody>
          <tr>
            <h4> <td>* Los operarios deberán poseer el carnet de manipuladores de alimentos, otorgado por el Técnico en Saneamiento Básico del municipio,<BR> previa capacitación en "Manipulación Higiénica de los Alimentos".</td></h4>
			<br>
<br>
            <h4> <td>* Cumplir la normatividad del 2674/2013 y  demás que la empresa estipule.</td></h4>
			            <h4> <td>Poseer la experiencia suficiente o la capacitación requerida.</td></h4>
            </tr><br><br>
			<h2><img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/06.jpg"> 	<img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/07.jpg"> <h2/>
          </tbody>
	</article>

<article> 


    </article>
	<BR>
	<article> 

		<a href="materialEstudio7.php">SIGUIENTE</a>
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


