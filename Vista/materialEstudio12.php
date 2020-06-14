<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_12</title>
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
<li> <a href="materialEstudio11.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>LIMPIEZA</em></h2>

          <tbody>
          <tr>
            <td><h1>*Calor:</h2> <h4> El más eficaz método de desinfección.</td></h1><br>

             <td><h1>*Detergentes:</h1><h4>Modifican  propiedades fisicoquímicas del agua, penetra, desaloja y arrastra residuos. Depende de la sustancia a eliminar, el material sobre el cual se va a limpiar <br> y el tiempo de contacto  las manos. </td></h4>
			 <br>
			<td><h1>*Un detergente debe:</h1><h4>Humidificar a fondo; extraer la suciedad de la superficie, mantener en suspensión la suciedad y enjuagar con facilidad.</td></h4>
						<h4><td>Para seleccionar un detergente se debe considerar otros aspectos como: ¿Es corrosivo? ¿Cuál es su propiedad bactericida? ¿Previene la formación de incrustaciones? ¿Es económico?.</td></h4>
            </tr>			<br>
			<h2><img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/14.jpg"> <h2/>

            </tr>

          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio13.php">SIGUIENTE</a>
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
