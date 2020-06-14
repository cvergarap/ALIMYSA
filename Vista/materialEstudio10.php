<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_10</title>
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
<li> <a href="materialEstudio9.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>PREPARACIÓN DE PLANES Y PROGRAMAS</em></h2>

          <tbody>
          <tr>
            <h2> <td>El articulo 28 del decreto 2674 de 2013 dice:</h2><h4> “Todo establecimiento y/o empresa de alimentos debe implementar y desarrollar un </h4><h2>Plan de Saneamiento</h2><img style="width: 180px; height: 100px;" alt="logo" src="../Recursos/12.jpg"> <h4>con objetivos plenamente definidos y con los procedimientos requeridos para disminuir los riesgos de contaminación de los alimentos”.
</td></h4>
			<h2><img style="width: 180px; height: 100px;" alt="logo" src="../Recursos/11.jpg"> <img style="width: 180px; height: 100px;" alt="logo" src="../Recursos/14.jpg"> <h2/>
            </tr>			


          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio11.php">SIGUIENTE</a>
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
