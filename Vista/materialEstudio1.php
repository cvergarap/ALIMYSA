<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_1</title>
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
<li> <a href="materialEstudio.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>
<h2><em>IMPORTANCIA DE LA MANIPULACIÓN DE ALIMENTOS</em></h2>

          <tbody>
          <tr>
            <h4> <td>* Existe una relaci&oacute;n directa y demostrada entre una inadecuada manipulaci&oacute;n de los alimentos y la transmisi&oacute;n de enfermedades a través de estos. </td></h4>
			<br>
<br>
            <h4> <td>* La higiene personal y los h&aacute;bitos higi&eacute;nicos de los manipuladores de alimentos constituyen uno de los mecanismos más eficaces para prevenir las toxiinfecciones alimentarias entre los consumidores.</td></h4>
            </tr><br><br>
			<h2><img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/01.jpg"> <h2/>
          </tbody>
	</article>

<article> 
<br>

    </article>
	<article> 
<br>
		<a href="materialEstudio2.php">SIGUIENTE</a>
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


