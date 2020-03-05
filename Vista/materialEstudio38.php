<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_38</title>
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
<li> <a href="materialEstudio37.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>

<section id="contenido"> 
<article> 
<br>
<h2><em>LAVADO ADECUADO  DE LAS MANOS</em></h2>

          <tbody>
          <tr>
            <h4><td>* Humedezca las manos y el antebrazo.</td></h1>
<br>
			            <h4><td>* Aplique jabón en sus manos y realice acción mecánica (estregar) desde el antebrazo hacia las manos; nunca de manos hacia antebrazo.</td></h1>
<br>
						            <h4><td>* Limpie muy bien sus uñas, que deben permanecer cortas siempre, entre los dedos también realice acción mecánica (estregar).</td></h1>
									<br>
						            <h4><td>* Enjuague con abundante agua, realizando movimientos desde el antebrazo hacia las manos.</td></h1>
									<br>
						            <h4><td>* Seque las manos con toallas de papel desechables.</td></h1>
									<br>
															            <h4><td>* Aplique gel desinfectante en sus manos.</td></h1>
			<br>
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio39.php">SIGUIENTE</a>
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
