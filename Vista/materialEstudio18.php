<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_18</title>
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
<li> <a href="materialEstudio17.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>MOSCAS Y OTROS INSECTOS</em></h2>

          <tbody>
          <tr>
            <h4><td>*Transportan gérmenes  o  excrementos,   las   moscas     regurgitan   sobre   el   alimento.</td></h4>
            <h4><td>*Pueden dejar sus excrementos sobre los alimentos o superficies; en las carnes pueden dejar larvas.</td></h4>
            <h4><td>*Usar insecticidas autorizados, pero no sobre los alimentos o los insumos, se aplica de noche y se lava al día siguiente.</td></h4>
            <h4><td>*Pueden usarse tubos fluorescentes y rejillas electrificadas. Las cucarachas viven y crían en lugares húmedos y oscuros, la limpieza es lo primero para su control.</td></h4>
            <h4><td>*Para  las cucarachas se deben usar insecticidas con acción residual por donde pasan o se esconden y esparcir ácido bórico en donde se alojan.</td></h4>
												   			 			<h2><img style="width: 50px; height: 50px;" alt="logo" src="../Recursos/26.jpg"> <h2/>
            <h4><td>*Evitar que los plaguicidas contaminen, almacenar adecuadamente, estar identificados y llevar registro de su aplicación.</td></h4>
            <h4><td>*Se debe proteger el edificio contra su entrada (angeo), eliminar los criaderos, proteger los alimentos para que los insectos no lleguen a ellos,<br> destruir los insectos en cualquier momento de su ciclo biológico.</td></h4>
									   			 			<h2><img style="width: 50px; height: 50px;" alt="logo" src="../Recursos/27.jpg"> <h2/>
													
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio19.php">SIGUIENTE</a>
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
