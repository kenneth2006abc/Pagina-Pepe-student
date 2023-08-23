<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_actualizacion.css">
    <title>Actualizacion</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>CONTRASEÑA</th>
            <th>FECHA INSCRIPCION</th>
            <th>ACCION</th>
        </tr>

    <?php
        include("ConexionABD.php");

        $consulta = "SELECT * FROM inscripcion";
        $resultado = mysqli_query($conexion, $consulta);

        while ($fila = mysqli_fetch_assoc($resultado))
        {
            echo
                "<tr>
                    <td>". $fila["id"] ."</td>
                    <td>". $fila["nombre"] ."</td>
                    <td>". $fila["email"] ."</td>
                    <td>". $fila["contrasena"] ."</td>
                    <td>". $fila["fecha_creacion"] ."</td>";

            echo
                "<td>
                    <form action='consulta_Actualizar.php' method='POST'>
                        <input type='hidden' name='id' value='".$fila["id"]."'>
                        <input type='hidden' name='nombre' value='".$fila["nombre"]."'>
                        <input type='hidden' name='email' value='".$fila["email"]."'>
                        <input type='hidden' name='contraseña' value='".$fila["contrasena"]."'>
                        <input type='hidden' name='fecha_creacion' value='".$fila["fecha_creacion"]."'>
                        <input type='submit' name='actualizar' value='actualizar' class='actualizar'>
                
                    </form>
                </td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($conexion);
    ?>
</body>
</html>
