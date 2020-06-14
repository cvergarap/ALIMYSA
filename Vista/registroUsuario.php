<?php
include_once "../Modelo/conexionBasesDatos.php";
echo'
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="author" content="cvergaraingenieria">
        <!--<meta name="description" content="descripcion de la pagina">-->
        <!--<meta name="keywords" content="palabras clave, separadas, por, comas">-->
        <!--<link rel="stylesheet" href="css/materialize.min.css" type="text/css">-->
        <!--<link rel="stylesheet" href="css/perCSS.css" type="text/css">-->
        <!--<script src="#" type="text/javascript"></script>-->
    </head>
    
    <body>
        <!-- Encabezado Header de la pagina -->
        <header>
            <h2>  REGISTRO DE USUARIOS  </h2>
        </header>
        
        <!-- Cuerpo de la pagina -->
        <section id="">
            <form method= GET action=../Controlador/insertarUsuarioDB.php>
            <label name= "ldoc">Documento Identidad</label></br>
            <input name= "innumber" type=number placeholder="No. Documento"></input></br>
            <label name= "lcon">Contraseña</label></br>
            <input name= "inpassword" type=password placeholder="Contraseña"></input></br>
            <label name= "lperf">Perfil Usuario</label></br>
            <select name= "option"> 
                <option value=1>Valor de Perfil 1</option>
                <option value=2>Valor de Perfil 2</option>
            </select></br>
            <input type=submit></input>
            </form>';
echo '
        </section>
        
        <!-- Pie de pagina -->
        <footer>
        </footer>
    </body>
</html>

';
?>