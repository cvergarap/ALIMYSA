<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_3</title>
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
<li> <a href="materialEstudio2.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>
<h2><em>CATEGORIA DE LOS MANIPULADORES DE ALIMENTOS</em></h2>

          <tbody>
          <tr>
            <h2> <td>* Manipuladores de alto riesgo:</h2><h4> Son aquéllos que mantienen contacto directo con alimentos que no sufren un tratamiento posterior antes de llegar al consumidor;<BR> asi mismo pertenecen a esta categoría las personas que intervienen en la elaboración de alimentos (carniceros, panaderos, camareros, etc).
</td></h4><br>
            <h2> <td>* Manipuladores de bajo riesgo:</h2> <h4> Son aquellos que mantienen contacto con alimentos que sufrirán un proceso de elaboración posterior antes de llegar al consumidor.</td></h4>
            </tr><br>
			<h2><img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/03.jpg"> <h2/>
          </tbody>
	</article>

<article> 


    </article>
	<BR>
	<article> 

		<a href="materialEstudio4.php">SIGUIENTE</a>
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


