<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_36</title>
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
<li> <a href="materialEstudio35.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>

<section id="contenido"> 
<article> 
<br>
<h2><em>ASEO PERSONAL DEL MANIPULADOR</em></h2>
<h2><em>HIGIENE PERSONAL</em></h2>
          <tbody>
          <tr>
            <h4><td>* No trabajar luego de aplicarse cremas o perfumes.</td></h1>
						 			<h2><img style="width: 50px; height: 50px;" alt="logo" src="../Recursos/59.jpg"> <h2/>
			            <h4><td>* Mantener limpio y ordenado su sitio de trabajo.</td></h1>
												 			<h2><img style="width: 50px; height: 50px;" alt="logo" src="../Recursos/62.jpg"> <h2/>
						            <h4><td>* Evite tocar o rascar zonas como las orejas, nariz, boca, partes íntimas, etc.</td></h1>
												 			<h2><img style="width: 50px; height: 50px;" alt="logo" src="../Recursos/60.jpg"> <h2/>

			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio37.php">SIGUIENTE</a>
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
