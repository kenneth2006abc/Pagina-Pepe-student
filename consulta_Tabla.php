<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estiloGrid.css">
        <title>Registros</title>
    </head>
    <body>
        <div class="contenedor_t2">
            <table class="t2">
            <tr>
                <th class="tht2" colspan="5">Rgistros Guardados</th>
            </tr>

        <?php
            include('consulta.php');
            if (isset($registros) && !empty($registros))
            {

                echo '<tr>'; // Fila

                foreach ($registros[0] as $campo => $valor) // Campos: id, nombre, email, contrasena, fecha
                {
                    echo '<th>'. $campo .'</th>';
                }

                echo '</tr>'; // Fin Fila

                    foreach ($registros as $registro)
                    {
                        echo '<tr>';

                        foreach ($registro as $valor)
                        {
                            echo '<td>'. $valor .'</td>';
                        }
                        echo '</tr>';
                    }

                    echo '</table>';
                    echo '</div>';
                }
                else
                {
                    echo '<p>No hay registros para mostrar.</p>';
                }

            mysqli_close($conexion);
        ?>


    </body>
</html>
