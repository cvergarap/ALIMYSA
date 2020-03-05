<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_7</title>
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
<li> <a href="materialEstudio6.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>PRODUCTO FINAL</em></h2>

          <tbody>
          <tr>
            <h4> <td>* Debe  poseer parámetros claros de calidad.</td></h4>
			<br>
            <h4> <td>* Poseer análisis fisicoquímico y microbiológico.</td></h4>
			<br>
            <h4> <td>* Se debe empacar  en el  menor tiempo posible, para evitar que se contamine con materias crudas .</td></h4>
			<br>
            <h4> <td>* No se debe colocar en el suelo.</td></h4>
			<br>
            <h4> <td>* Es necesario que exista un lugar especial para el empaque y almacenamiento del producto final.</td></h4>
			<br>
            <h4> <td>* Debe poseer estudio de vida de anaquel.</td></h4>
			<br>
            <h4> <td>* Evitar la contaminación cruzada.</td></h4>

            </tr>
			<h2><img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/07.jpg"> <h2/>
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio8.php">SIGUIENTE</a>
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


