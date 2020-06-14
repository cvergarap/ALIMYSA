<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_48</title>
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
<li> <a href="materialEstudio47.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>

<section id="contenido"> 
<article> 
<br>
<h2><em>CONTAMINACIÓN FÍSICA</em></h2>
          <tbody>
          <tr>
            <h4><td>Se refiere a la presencia de cualquier materia extraña que puede ponerse en contacto con el alimento a lo largo de la cadena de producción, almacenamiento, transporte, <br>comercialización del mismo, de forma accidental.A diferencia de otros contaminantes, la contaminación física es macroscópica (es visible)<br>y se refiere al material orgánico o inorgánico, cuya presencia en el producto no es deseable y que al rebasar un límite máximo se estima contaminante.</td></h1>
<BR>
						 			<h2><img style="width: 300px; height: 200px;" alt="logo" src="../Recursos/73.jpg"> <h2/>
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio49.php">SIGUIENTE</a>
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
