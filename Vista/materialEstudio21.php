<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_21</title>
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
<li> <a href="materialEstudio20.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>PROGRAMA DE RESIDUOS</em></h2>

          <tbody>
          <tr>
            <h4><td>*Con éste plan se debe asegurar que el impacto ambiental sea mínimo.</td></h1>
						 			<h2><img style="width: 150px; height: 150px;" alt="logo" src="../Recursos/31.jpg"> <h2/>
            <h4><td>*Se debe considerar por lo tanto la disposición final de los residuos sólidos, líquidos y peligrosos. </td></h1>
            <h4><td>*Debe incluir clasificación y manejo, reducción  y separación en la fuente y recipientes para la basura.</td></h1>
			 			<h2><img style="width: 150px; height: 150px;" alt="logo" src="../Recursos/32.jpg"> <h2/>
													
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
	<a href="materialEstudio22.php">SIGUIENTE</a>
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
