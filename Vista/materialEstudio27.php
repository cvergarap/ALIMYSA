<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_27</title>
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
<li> <a href="materialEstudio26.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>ENFERMEDADES TRANSMITIDAS POR LOS ALIMENTOS (ETA)</em></h2>
			 			<h2><img style="width: 150px; height: 150px;" alt="logo" src="../Recursos/40.jpg"> <h2/>
          <tbody>
          <tr>
            <h4><td>Son las enfermedades causadas por la ingestión de alimentos que contienen cantidades considerables de bacterias nocivas (patógenas) o los productos tóxicos que éstas generan en su crecimiento.</td></h1>
			 			<h2><img style="width: 150px; height: 150px;" alt="logo" src="../Recursos/41.jpg"> <h2/>
													
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio28.php">SIGUIENTE</a>
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
