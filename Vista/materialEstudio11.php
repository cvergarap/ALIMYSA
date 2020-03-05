<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_11</title>
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
<li> <a href="materialEstudio10.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>PROGRAMA DE LIMPIEZA Y DESINFECCIÓN</em></h2>

          <tbody>
          <tr>
            <h4> <td>Está relacionado con el aseo o higiene de todos los elementos que intervienen en la elaboración, almacenamiento, distribución, comercialización y transporte del alimento.</td></h4>
			<br>

            <h4> <td>La limpieza es el resultado de eliminar completamente la suciedad visible, mientras que la desinfección se realiza después de lavar con el fin de destruir los microorganismos. </td></h4>
            </tr>			<br>
			<h2><img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/13.jpg"> <h2/>

            </tr>

          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio12.php">SIGUIENTE</a>
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
