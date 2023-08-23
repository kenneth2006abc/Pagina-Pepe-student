<?php
    include("ConexionABD.php");

    $consulta = "SELECT * FROM inscripcion";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) 
    {
        $registros = array();

        while ($fila = mysqli_fetch_assoc($resultado)) 
        {
            $registros[] = $fila;
        }
    }
?>