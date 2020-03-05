<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_47</title>
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
<li> <a href="materialEstudio46.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>

<section id="contenido"> 
<article> 
<br>
<h2><em>PROCEDIMIENTOS PARA LA CARGA</em></h2>
<h2><em>¡¡¡¡CUIDADO!!!!</em></h2>
          <tbody>
          <tr>
            <h4><td>Un inadecuado cargue de alimentos en el vehículo, puede provocar una contaminación cruzada, debido al transporte de cargas diferentes y no compatibles.</td></h1>
<BR>
			            <h4><td>Ejemplos:</td></h1>
<BR>
			            <h4><td>* Cargar alimentos aptos para consumo humano con alimentos para consumo animal.</td></h1>
<BR>
			            <h4><td>* Transportar alimentos aptos para consumo humano con jabones, detergentes o sustancias químicas.</td></h1>
<BR>
			            <h4><td>* Transportar alimentos con cadena de frio latente y alimentos cocidos o sin especificaciones de T° de almacenamiento.</td></h1>
<BR>
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio48.php">SIGUIENTE</a>
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
