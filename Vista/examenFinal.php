<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
//examen ingreso
$sql="Insert nombEst,identEst,telEst,correoEst,preg1, preg2, preg3, preg4, preg5, preg6, preg7, preg8, preg9, preg10, preg11, preg12, preg13, preg14 from examen";
$examen=$objConexion->query($sql);
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarExamen.php" enctype="multipart/form-data">
<head>
<meta charset="UTF-8">
<title>EXAMEN FINAL MANIPULACI&Oacute;N DE ALIMENTOS</title>
<link rel="stylesheet" href="../Css/estilos_control_miembros.css"> 
</head>


<body>
<div id="contenedor">
<header> 
<h2><img style="width: 180px; height: 130px;" alt="logo" src="../Recursos/logo.jpg"> <h2/><h2> <em> BUENAS PR&Aacute;CTICAS DE MANUFACTURA</em><h2/>
</header>

<nav> 
<div id="header">
<ul class="nav">
<li> <a href="salir.php"><h3>SALIR</h3></a>
</li>
<li> <a href="materialEstudio51.php"><h3>ATRAS</h3></a>
</li>
</ul>
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>

          <tbody>
          <tr>
            <h4 <td>Nombre(s) Completo:</td></h4> 
			<td><input name="nombres" type="text" id="nombres" size="53" required /></td>
            </tr><br><br>
			
			<tr>
            <h4 <td>Identificaci&oacute;n:</td></h4> 
			<td><input name="nit" type="text" id="nit" size="53" required /></td>
            </tr><br><br>
			
            <tr>
              <h4 <td>Telefono de Contacto:</td></h4> 
			<td><input name="telefono" type="text" id="telefono" size="53" required /></td>
            </tr><br><br>
			
			<tr>
              <h4 <td>Correo Electr&oacute;nico:</td></h4> 
			<td><input name="correo" type="text" id="correo" size="53" required /></td>
            </tr><br><br>
			
			<tr>
              <h4 <td>1. Lea el siguiente texto y seleccione la respuesta:</td></h4> 
			                <h4 <td>“Es la garant&iacute;a de que un alimento no va a causar daño a la salud de la persona que lo consuma”.</td></h4> 
            </tr>
			<td><label for="pregunta1"></label>
			<select name="pregunta1" id="pregunta1" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="seguridad">Seguridad</option>
			<option value="calidad">Calidad</option>
						<option value="ACTIVO">Inocuidad</option>
			<option value="OCASIONAL">Higiene</option>
			</select>
			</td><br><br><br>
			
						<tr>
              <h4 <td>2. Lea la siguiente informaci&oacute;n y seleccione con cuales n&uacute;meros se identifican las afirmaciones correctas:</td></h4> 
			                <h4 <td>Para velar por la inocuidad se debe: <br>1.Establecer controles a lo largo de la cadena alimentaria <br>2.Controlar que los alimentos tengan buen sabor, color, aroma y textura. <br>3.Introducir peligros en el alimento como metales, piedras, sustancias qu&iacute;micas.</td></h4> 
            </tr>
			<td><label for="pregunta2"></label>
			<select name="pregunta2" id="pregunta2" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">1,2,3</option>
			<option value="2">1</option>
						<option value="3">2,3</option>
			<option value="4">1,2</option>
			</select>
			</td><br><br><br>
			
			
									<tr>
              <h4 <td>3. Conocer la forma correcta de manejar los alimentos en forma higi&eacute;nica es una responsabilidad  de:</td></h4> 
       </tr>
			<td><label for="pregunta3"></label>
			<select name="pregunta3" id="pregunta3" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">De todos los manipuladores de alimentos</option>
			<option value="2">Solo del dueño del servicio de alimentos</option>
						<option value="3">Solo de las autoridades sanitarias</option>
			<option value="4">Solo de los consumidores</option>
			</select>
			</td><br><br><br>
			
			
			
			
			              <h4 <td>4. Capacitar el personal, asi como cumplir con la legislaci&oacute;n son responsabilidades de:</td></h4> 
       </tr>
			<td><label for="pregunta4"></label>
			<select name="pregunta4" id="pregunta4" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">Autoridades sanitarias</option>
			<option value="2">Manipulador de alimentos</option>
						<option value="3">Dueño de un servicio de alimentos</option>
			<option value="4">Los consumidores</option>
			</select>
			</td><br><br><br>
			
			
						<h4 <td>5. Si usted elabora, transporta, cosecha, comercializa, sirve alimentos o los consume; entonces usted es un manipulador de alimentos:</td></h4> 
       </tr>
			<td><label for="pregunta5"></label>
			<select name="pregunta5" id="pregunta5" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">SI</option>
			<option value="2">NO</option>
			</select>
			</td><br><br><br>
			
			
			
									<h4 <td>6. La contaminaci&oacute;n de los alimentos, ingredientes o equipo, puede ser evitado por el manipulador de alimentos:</td></h4> 
       </tr>
			<td><label for="pregunta6"></label>
			<select name="pregunta6" id="pregunta6" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">SI</option>
			<option value="2">NO</option>
			</select>
			</td><br><br><br>
			
			
			
			
			
									<h4 <td>7. La salud del consumidor solo es responsabilidad de las autoridades sanitarias:</td></h4> 
       </tr>
			<td><label for="pregunta7"></label>
			<select name="pregunta7" id="pregunta7" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">SI</option>
			<option value="2">NO</option>
			</select>
			</td><br><br><br>
			
			
			
			
									<h4 <td>8. Lea el siguiente texto:<br> "Son seres vivos tan pequeños que es necesario hacer uso de un microscopio para poder apreciarlos".<br>La anterior definici&oacute;n corresponde al t&eacute;rmino:</td></h4> 
       </tr>
			<td><label for="pregunta8"></label>
			<select name="pregunta8" id="pregunta8" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">Plagas</option>
			<option value="2">Microorganismos</option>
						<option value="3">Algas</option>
									<option value="4">Nutrientes</option>
			</select>
			</td><br><br><br>
			
			
			
									<h4 <td>9. Lea la siguiente informaci&oacute;n:<br>1. Desinfectantes.<br>2. Temperatura.<br>3. Tiempo. <br>¿Con cuales de los t&eacute;rminos se identifican algunas de las necesidades que tienen los microorganismos para reproducirse?:</td></h4> 
       </tr>
			<td><label for="pregunta9"></label>
			<select name="pregunta9" id="pregunta9" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">1,2,3</option>
			<option value="2">2</option>
						<option value="3">2,3</option>
									<option value="4">3</option>
			</select>
			</td><br><br><br>
			
			
			
									<h4 <td>10. Una enfermedad de transmisi&oacute;n alimentaria se define como:</td></h4> 
       </tr>
			<td><label for="pregunta10"></label>
			<select name="pregunta10" id="pregunta10" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">Una enfermedad transmitida por otra persona</option>
			<option value="2">Una enfermedad transmitida por cualquier alimento</option>
						<option value="3">Una enfermedad transmitida por un alimento contaminado</option>
									<option value="4">Una enfermedad sin cura</option>
			</select>
			</td><br><br><br>
			
			
			
			
			
									<h4 <td>11. Dolor de cabeza, n&aacute;useas, v&oacute;mito y diarrea son parte de los s&iacute;ntomas mas comunes que sufren las personas cuando:</td></h4> 
       </tr>
			<td><label for="pregunta11"></label>
			<select name="pregunta11" id="pregunta11" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">Sufren una enfermedad de una transmisi&oacute;n alimentaria</option>
			<option value="2">Cuando presentan un cuadro de indigesti&oa	cute;n</option>
						<option value="3">Cuando comen mucha comida</option>
									<option value="4">Cuando se comen la comida fria</option>
			</select>
			</td><br><br><br>
			
			
			
			
									<h4 <td>12. Las temperaturas adecuadas para el almacenamiento y transporte de alimentos refrigerados y alimentos congelados deben ser:</td></h4> 
       </tr>
			<td><label for="pregunta12"></label>
			<select name="pregunta12" id="pregunta12" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">Refrigerado: 2°c a 8°c    Congelado: -5°c a -1°c</option>
			<option value="2">Refrigerado: 0°c a 10°c    Congelado: -15°c a -10°c</option>
						<option value="3">Refrigerado: 0°c a 4°c    Congelado: -18 °c</option>
									<option value="4">Refrigerado: 0°c a 4°c    Congelado: -10°c</option>
			</select>
			</td><br><br><br>
			
			
			
			
									<h4 <td>13. Definici&oacute;n de la contaminaci&oacute;n biol&oacute;gica:</td></h4> 
       </tr>
			<td><label for="pregunta13"></label>
			<select name="pregunta13" id="pregunta13" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="1">Alteraciones químicas en los alimentos provocadas por insecticidas</option>
			<option value="2">Contaminaci&oacute;n en los alimentos por cabellos</option>
						<option value="3">Contaminaci&oacute;n en los alimentos por microorganismos pat&oaocute;genos</option>
									<option value="4">Enfermedades transmitidas por los alimentos</option>
			</select>
			</td><br><br><br>
			
			
			
			
			

			<tr>
              <h4 <td>14. Desde su perspectiva, explique brevemente la importancia de cumplir con las buenas pr&aacute;cticas de manufactura (BPM) y nombre 5 acciones que ayudan a disminuir riesgos<br> de contaminaci&oacute;n Y/O alteraciones a los alimentos durante el almacenamiento y transporte:</td></h4> 
			<textarea name="pregunta14" id="pregunta14" rows="10" cols="40"></textarea>
            </tr><br><br><br>

          </tbody>
	</article>

<article> 
<br><br>
<h3 align="center"><td>
  <input name="ENVIAR" value="CONFIRMAR" type="submit">

</td></h3>

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
if ($msj==1)
	echo '<p align="center" >examen insertado';
if ($msj==2)
	echo '<p align="center">problemas para insertar';
?>


