<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_45</title>
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
<li> <a href="materialEstudio44.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>

<section id="contenido"> 
<article> 
<br>
<h2><em>PROCEDIMIENTOS PARA LA CARGA</em></h2>
          <tbody>
          <tr>
            <h4><td>* El vehículo se encuentra limpio y desinfectado.</td></h1>
<BR>
			            <h4><td>* Residuos de cargas anteriores no deben estar presentes.</td></h1>
<BR>
			            <h4><td>* No debe haber residuos químicos del material con el que se limpió o desinfectó.</td></h1>
<BR>
			            <h4><td>* Que la carga sea acomodada y ubicada reduciendo su exposición al ambiente y manteniendo los requisitos de temperatura y destino.</td></h1>
<BR>
			            <h4><td>* No debe existir posibilidad de contaminación física, biológica o química.</td></h1>
<BR>
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio46.php">SIGUIENTE</a>
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
