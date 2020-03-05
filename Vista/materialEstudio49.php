<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_49</title>
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
<li> <a href="materialEstudio48.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>

<section id="contenido"> 
<article> 
<br>
<h2><em>CONTAMINACIÓN QUÍMICA</em></h2>
          <tbody>
          <tr>
            <h4><td>La contaminación química en los alimentos se da por la presencia de ciertos químicos que pueden ser nocivos y tóxicos para el ser humano y pueden proceder de:</td></h1>
<BR>
            <h4><td>* Residuos de Plaguicidas, insecticidas y demás que se usan para el control de plagas.</td></h1><BR>
			            <h4><td>* Residuos ambientales propios de actividades económicas como la minería, también debido a contaminación en el agua, tierra y aire debido a las actividades industriales nocivas.</td></h1><BR>
						            <h4><td>* Toxinas naturales que producen algunos hongos.</td></h1><BR>
									            <h4><td>* Sustancias que se producen en el procesamiento o manipulación del alimento.</td></h1>

						 			<h2><img style="width: 550px; height: 200px;" alt="logo" src="../Recursos/74.jpg"> <h2/>
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio50.php">SIGUIENTE</a>
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
