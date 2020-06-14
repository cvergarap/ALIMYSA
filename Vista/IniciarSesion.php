
<head>
<meta charset="UTF-8">
<title>IniciarSesion</title>
<link rel="stylesheet" href="../Css/estilos.css"> 
</head>


<body>
<div id="contenedor">
<header> 
<h2><img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/logo.jpg"> <h2/><h2> <em> BUENAS PR&AacuteCTICAS DE MANUFACTURA</em><h2/>
</header>

<nav> 
<tr>
</tr>
</nav>

<section id="contenido"> 


<article> 
<h1> Iniciar sesi&oacute;n para ver los contenidos</h1>
</article>

<form action="../Controlador/validarInicioSesion.php" method="post">
  <table width="100%"  align="center">

    <tr>
      <td align="center"><strong><em>USUARIO:</em></strong></td><br>
      <td width="50%"><label for="login"></label>
      <input name="login" type="text" id="login" size="50%" required/></td>
    </tr>
    <tr>
      <td align="center"><strong><em>CONTRASE&Ntilde;A:</em></strong></td>
      <td><label for="password"></label>
      <input name="pass" type="password" id="pass" size="50%" required/></td>
    </tr>
	<br>
		<br>
    <tr>
      <td colspan="2" align="center" ><input type="submit" name="button" id="button" value="INGRESAR" /></td>
    </tr>
  </table>
	<br>	<br>


<article> 
<h2> Quienes somos: <a href="verInventarioBodega32.php">Ingresar</a></h2>
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
/*
if ($x==1)
	echo "<br><p align='center'> Usuario no registrado con los datos ingresados, vuelva a intentar";
if ($x==2)
	echo "<br><p align='center'> Deben Iniciar Sesion para poder ingresar a la Aplicacion";
if ($x==3)
	echo "<br><p align='center'> El Usuario ha cerrado la Sesion";
?>
*/