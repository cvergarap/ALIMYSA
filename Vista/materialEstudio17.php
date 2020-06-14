<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_17</title>
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
<li> <a href="materialEstudio16.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>LUCHAR CONTRA LAS PLAGAS</em></h2>

          <tbody>
          <tr>
            <td><h1>Ratas y ratones:</h1> <h4>Destructores, fuente de contaminación, se reproducen rápidamente, toda superficie que toque se considera infectada, <BR> se debe vigilar cualquier signo de infestación (heces, roeduras, agujeros y raspaduras, huellas, alimentos dañados y ratas o ratones muertos),<br> realizar un examen sistemático y periódico, tapar todo agujero y entrada, cerrar grifos y accesos de agua, usar venenos cuando hay infestación.</h4><h2><img style="width: 50px; height: 50px;" alt="logo" src="../Recursos/24.jpg"></h2><br><h4>NO USAR GATOS; usar trampas solo para control. Los cebos envenenados deben ponerse mínimo dos semanas continuas.</h4></td></h1>
									   			 			<h2><img style="width: 50px; height: 50px;" alt="logo" src="../Recursos/25.jpg"> <h2/>
													
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio18.php">SIGUIENTE</a>
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
