<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_20</title>
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
<li> <a href="materialEstudio19.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>La Resolución 2674/13, orienta sobre lo que debe tener y cumplir un programa de Manejo Integrado de Plagas.</em></h2>

          <tbody>
          <tr>
            <h4><td>*Uso de insecticidas, plaguicidas o cualquier sustancia que ataque las plagas, aptos para empresas de alimentos evitando al máximo el contacto directo con el producto final o materias primas.</td></h1>
			 			<h2><img style="width: 150px; height: 150px;" alt="logo" src="../Recursos/29.jpg"> <h2/>
						            <h4><td>*La empresa prestadora del servicio, debe entregar un informe detallado de hallazgos, áreas tratadas, acciones correctivas y preventivas y métodos de aplicación usados en la inspección.</td></h1>
			 			<h2><img style="width: 150px; height: 150px;" alt="logo" src="../Recursos/30.jpg"> <h2/>
													
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio21.php">SIGUIENTE</a>
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
