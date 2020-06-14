<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Formulario</title>
</head>
<body>
    <header>
        <div class="container-fluid text-center">
            <h3>Formulario de inscripción para realizar Test BPM</h3>
            </div>
        </div>
    </header>
    <section>
        <div class="container" >
            <form action="TEST_BPM.php" method="post">
                <label for="number_ti_doc">Tipo Documento</label>
                    <select class="form-control" name="number_ti_doc" id="number_ti_doc">
                        <option value="0" selected>Seleccionar Documento</option>
                        <option value="DI">Tarjeta de Identidad</option>
                        <option value="CC">Cédula de Ciudadanía</option>
                        <option value="OD">Otro Documento</option>
                    </select>
				<label for="number_doc">Numero de Documento</label>
                <input type="number" name="number_doc" id="number_doc" class="form-control" placeholder="Numero de Documento" aria-describedby="helpId" required>
                <label for="nombres">Nombre Completo</label>
                <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombre Completo" aria-describedby="helpId" required>
                <label for="telefono">Telefono</label>
                <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="1234567" aria-describedby="helpId" required>
                <label for="email">E-Mail</label>
                <input type="mail" name="email" id="email" class="form-control" placeholder="@ Correo" aria-describedby="helpId" required>
                <br>

                <button type="submit" class="btn btn-primary" name="btn-enviar" id="btn-enviar">Aceptar</button>
            </form>
        </div>
    </section>
    <section>
        
    </section>
    <footer>
        <div class="footer text-justify container-fluid text-muted">
            <br>
            <p>Declaración de privacidad</p>
            <p>Los datos ingresados solo se utilizan para controlar el ingreso al test de BPM</p>
        </div>
    </footer>
</body>
</html>
