<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_39</title>
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
<li> <a href="materialEstudio38.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>

<section id="contenido"> 
<article> 
<br>
<h2><em>ASEO PERSONAL DEL MANIPULADOR</em></h2>
<h2><em>SE DEBE LAVAR LAS MANOS CADA VEZ QUE:</em></h2>
          <tbody>
          <tr>
            <h4><td>* Antes de iniciar y después de culminar las labores.</td></h1><br>

			            <h4><td>* Después de manipular cualquier tipo de objeto y/o animal.</td></h1><br>

						            <h4><td>* Antes y después de entrar en contacto con los alimentos.</td></h1><br>

						            <h4><td>* Luego de entrar al baño.</td></h1><br>
															            <h4><td>* Después de tocar alguna parte del cuerpo como cabello, nariz, orejas, etc.</td></h1><br>
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio40.php">SIGUIENTE</a>
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
