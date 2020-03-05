<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_26</title>
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
<li> <a href="materialEstudio25.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>PLAN DE CAPACITACIÓN</em></h2>

          <tbody>
          <tr>
            <h4><td>Según la Res. 2674/13, las horas mínimas anuales para cumplir con dicho requisito, es de 10 horas; teniendo en cuenta,<br> que sólo serán válidas las capacitaciones sobre Manipulación de Alimentos, BPM, y todo lo relacionado con ello.</td></h1>
						 			<h2><img style="width: 150px; height: 150px;" alt="logo" src="../Recursos/39.jpg"> <h2/>
            <h4><td>Algunos cursos pueden ser:<br> “Principios Básicos de Buenas Prácticas de Manufactura”; “Manipuladores de alimentos”; “Manejo Adecuado de Químicos”; “Limpieza y desinfección”; etc.</td></h1>
			 			<h2><img style="width: 150px; height: 150px;" alt="logo" src="../Recursos/38.jpg"> <h2/>
													
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio27.php">SIGUIENTE</a>
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
