<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarEliminarInfantil.php">
<head>
<meta charset="UTF-8">
<title>Eliminar_Miembro</title>
<link rel="stylesheet" href="../Css/estilos_exis_bodega.css"> 
</head>


<body>
<div id="contenedor">
<header> 
<h2><img style="width: 170px; height: 120px;" alt="logo" src="../Recursos/logo.jpg"> <em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h2/>
</header>

<nav> 
<div id="header">
<ul class="nav">
<li> <a href="salir.php"><h3>SALIR</h3></a>
</li>
<li> <a href="navegacion4.php"><h3>ATRAS</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>
<h2>ELIMINAR MIEMBROS</h2>

          <tbody>
          <tr>
            <h4> <td>INGRESE EL N&Uacute;MERO DEL C&Oacute;DIGO DEL MIEMBRO A ELIMINAR:</td></h4> 
			<td><input name="codigo" type="text" id="codigo" size="53" required /></td>
            </tr>
          </tbody>
	</article>

<article> 
<br>
<h3 align="center"><td>
  <input name="ENVIAR" value="CONFIRMAR" type="submit">

</td></h3>

    </article>
  </section>

<footer> 
<h4><em>SOFTWARE DE ADMINISTRACI&Oacute;N INTERNA</em><h4/>
<h4><em>IGLESIA BAUTISTA BEREA CENTRAL DE PEREIRA</em><h4/>
<h4><em>CARRERA 7 N&Uacute;MERO 28-33 PEREIRA RDA. TELEFONO: (036) 3265839</em><h4/>
</footer>

</div>
</body>
</form>
<?php
if ($msj==1)
	echo '<p align="center" >SE HA ELIMINADO UN MIEMBRO CORRECTAMENTE';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN EL BORRADO DEL MIEMBRO, FAVOR REVISE E INTENTE DE NUEVO';
?>


