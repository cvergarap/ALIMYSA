<?php
/** CONEXIONES */
require_once '../Controlador/tableCRUD.php';

/** DATOS QUE SE RECIBEN */

$ti_doc= $_REQUEST['number_ti_doc'];
$nomb_est= $_REQUEST['nombres'];
$num_doc= $_REQUEST['number_doc'];
$tel_est= $_REQUEST['telefono'];
$email_est= $_REQUEST['email'];

$resultadoQuery= insertarEstudiante($nomb_est, $num_doc, $tel_est, $email_est);
//$num_doc= '1';
//$email_est= '1';

//$resultadoQuery= selecEstudiante($num_doc, $email_est);

if($resultadoQuery == 'NOK-1')
{
    echo'

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <title>Datos Registro</title>
        </head>
        <body>
                <div class="container">
                    <h4>El estudiante ya presentó un TEST BPM</h4>
                    <h4>Datos Registrados</h4>
                    <p>
                    <strong>Tipo de Documento: </strong>'.$ti_doc.'<br>
                    <strong>Número de Documento: </strong>'.$num_doc.'<br>
                    <strong>Nombres: </strong>'.$nomb_est.'<br>
                    <strong>Teléfono: </strong>'.$tel_est.'<br>
                    <strong>Correo electrónico: </strong>'.$email_est.
                    '</p>
                    <button class="btn btn-primary" onclick="document.location=\'ingresarTEST.php\';">Regresar</button>
            </div>
        </body>
        </html>
        
        ';

} elseif($resultadoQuery == 'NOK')
{
    echo 'Error en el proceso';
} else
{
    echo'

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <title>Datos Formulario</title>
        </head>
        <body>
            <div class="container">
                <div>
                    <h4>Datos Registrados</h4>
                    <p>
                    <strong>Nombres: </strong>'.$nomb_est.'<br>
                    <strong>Número de Documento: </strong>'.$num_doc.'<br>
                    </p>
                    <h3>TEST BPM</h3>
                </div>
                <div>
					<form action="#" method="post">
						<div class="form-group">
							<label for="preg1">Pregunta 1</label>
							<p>
								Texto referente de apoyo a la pregunta que se hace al estudiante
							</p>
							<input type="text" class="form-control" name="preg1" id="preg1" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg2">Pregunta 2</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg2" id="preg2" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg3">Pregunta 3</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg3" id="preg3" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg4">Pregunta 4</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg4" id="preg4" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg5">Pregunta 5</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg5" id="preg5" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg6">Pregunta 6</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg6" id="preg6" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg7">Pregunta 7</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg7" id="preg7" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg8">Pregunta 8</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg8" id="preg8" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg9">Pregunta 9</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg9" id="preg9" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg10">Pregunta 10</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg10" id="preg10" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg11">Pregunta 11</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg11" id="preg11" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg12">Pregunta 12</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg12" id="preg12" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg13">Pregunta 13</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg13" id="preg13" placeholder="">
						</div>
						<div class="form-group">
								<label for="preg14">Pregunta 14</label>
								<p>
									Texto referente de apoyo a la pregunta que se hace al estudiante
								</p>
								<input type="text" class="form-control" name="preg14" id="preg14" placeholder="">
						</div>
					</form>           
                </div>
                <div>
                    <button class="btn btn-primary" onclick="document.location=\'ingresarTEST.php\';">Enviar</button>
                </div>
            </div>
        </body>
        </html>

        ';
}





?>
