<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_13</title>
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
<li> <a href="materialEstudio12.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>DESINFECCIÓN</em></h2>

          <tbody>
          <tr>
            <h4><td>Reduce el número de microorganismos vivos, generalmente no mata las esporas, debe ir precedido de una cuidadosa limpieza, en lo posible usar con calor.</td></h1><br>

             <td><h1>*Hipoclorito:</h1><h4>Buen desinfectante, no es costoso, no deja olor ni sabor en concentraciones adecuadas, actividad antibacteriana amplia, activo contra algunas esporas. Se inactiva con ciertos materiales orgánicos y muy concentrado puede ser corrosivo, sobre todo en aleaciones de aluminio.</td></h4>
			 <br>
			 			<h2><img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/15.png"> <h2/>
			<td><h1>¡CUIDADO!</h1><h4>SIEMPRE DOSIFICAR DE ACUERDO A LA FICHA TÉCNICA.</td></h4>

            </tr>			<br>


          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio14.php">SIGUIENTE</a>
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
