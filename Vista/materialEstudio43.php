<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_43</title>
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
<li> <a href="materialEstudio42.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>

<section id="contenido"> 
<article> 
<br>
<h2><em>TEMPERATURAS DE ALMACENAMIENTO</em></h2>
          <tbody>
          <tr>
            <h4><td>CONGELADO: Se considera un alimento congelado aquel cuya temperatura no es superior a menos dieciocho grados centígrados (-18° C).</td></h1>
<BR>
			            <h4><td>REFRIGERADO: Aquel alimento que para preservar su integridad y calidad, reduciendo las alteraciones físicas, bioquímicas y microbiológicas <br>se mantiene a temperaturas de entre cero grados y cuatro grados centígrados (0° C a 4° C).
.</td></h1>
<BR>

			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio44.php">SIGUIENTE</a>
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
