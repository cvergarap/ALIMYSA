<?php

require_once '../Modelo/conexionBasesDatos.php';

/** CRUD ESTUDIANTE*/

function insertarEstudiante($nomb_est, $num_doc, $tel_est, $email_est)
{
    $conexion= Conectarse();
    //var_dump('connect_errno', $conexion);
    $estudianteSeleccionado= selecEstudiante($num_doc, $email_est);
    if (is_array($estudianteSeleccionado))
    {
        if($estudianteSeleccionado["idExamen"] > 0)
        {
            return 'NOK-1';
        } else 
        {
            return 'NOK';
        }

    } elseif($estudianteSeleccionado = 'NO_SQL')
    {
        if($num_doc= "" OR $email_est = "")
        {

        } else
        {
            $query= "INSERT 
            INTO examen (nombEst, identEst, telEst, correoEst) 
            VALUES ('$nomb_est', '$num_doc', '$tel_est', '$email_est')";
            $resultadoQuery= mysqli_query($conexion, $query, MYSQLI_STORE_RESULT);
            return 'Insertar OK';
        }
    }
    else
    {
        return 'NOK';
    }
}


function selecEstudiante($num_doc, $email_est)
{
    $conexion= Conectarse();
	
	//var_dump($conexion); exit();
	//var_dump('connect_errno', $conexion->connect_errno);
    //var_dump('connect_error', $conexion->connect_error);
    //var_dump('field_count', $conexion->num_rows);
    
	if ($conexion->connect_errno )
    {
        header("Location: #");
        
    } else 
    {
        $query= "SELECT idExamen, identEst, correoEST FROM examen WHERE identEst= '$num_doc' OR correoEst= '$email_est'";
        $resultadoQuery= mysqli_query($conexion, $query, MYSQLI_STORE_RESULT);
        $fila = mysqli_fetch_array($resultadoQuery, MYSQLI_BOTH);

        if (($resultadoQuery->num_rows) > 0)
        {
            //limpiarmemoria($conexion, $resultadoQuery);
            return ($fila);
        } else
        {
            return 'NO_SQL';
        }
    }
}


function updateEstudiante()
{
    //var_dump('connect_errno', $conexion->connect_errno);
    //var_dump('connect_error', $conexion->connect_error);
    //var_dump('field_count', $conexion->field_count);
    $conexion= Conectarse();

    if ($conexion->connect_errno)
    {
        header("Location: #");
        
    } else 
    {
        $query= "SELECT idExamen, identEst, correoEST FROM examen WHERE identEst= '$num_doc' OR correoEst= '$email_est'";
        $resultadoQuery= mysqli_query($conexion, $query, MYSQLI_STORE_RESULT);
        $fila = mysqli_fetch_array($resultadoQuery, MYSQLI_BOTH);
        //limpiarmemoria($conexion, $resultadoQuery);
		echo('Se actualiza el registro del estudiante: '.implode(', '; $fila)); exit();
        return $fila;
    }
}


/** CRUD USUARIOS*/
function selecUsuario()
{
    //var_dump('connect_errno', $conexion->connect_errno);
    //var_dump('connect_error', $conexion->connect_error);
    //var_dump('field_count', $conexion->field_count);
    $conexion= Conectarse();

    if ($conexion->connect_errno)
    {
        header("Location: #");
        
    } else 
    {
        $query= "SELECT * FROM usuarios";
        $resultadoQuery= mysqli_query($conexion, $query, MYSQLI_STORE_RESULT);
        $fila = mysqli_fetch_array($resultadoQuery, MYSQLI_BOTH);
        echo implode(', ', $fila);
        //limpiarmemoria($conexion, $resultadoQuery);
        return 'Seleccionar OK';
    }
}



?>