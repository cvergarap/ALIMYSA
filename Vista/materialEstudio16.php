<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarMiembro.php">
<head>
<meta charset="UTF-8">
<title>Material_Estudio_16</title>
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
<li> <a href="materialEstudio15.php"><h3>Atr&aacute;s</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<h2><em>PROGRAMA DE CONTROL DE PLAGAS</em></h2>

          <tbody>
          <tr>
            <h4><td>Una de las causas por las que se puede echar a perder un producto, son las diferentes plagas que pueden entrar en contacto con el alimento sea directa o indirectamente.</td></h1>

             <h4><td>Además, pueden transmitir por medio de los alimentos contaminados, enfermedades que pueden provocar daños en los sistemas funcionales del ser humano.</td></h4>

			              <h4><td>Entre las mas comunes tenemos:</td></h4>
						               <h4><td>*CUCARACHAS</td></h4>
									   			 			<h2><img style="width: 50px; height: 50px;" alt="logo" src="../Recursos/20.jpg"> <h2/>
																					               <h4><td>*MOSCAS</td></h4>
									   			 			<h2><img style="width: 50px; height: 50px;" alt="logo" src="../Recursos/21.jpg"> <h2/>
																					               <h4><td>*ROEDORES</td></h4>
									   			 			<h2><img style="width: 50px; height: 50px;" alt="logo" src="../Recursos/22.jpg"> <h2/>
													
			 
           </tr>			
          </tbody>
	</article>
<BR>
	<article> 
		<a href="materialEstudio17.php">SIGUIENTE</a>
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
