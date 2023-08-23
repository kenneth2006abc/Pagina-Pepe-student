<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_eliminacion.css">
    <title>Modificacion</title>
</head>
<script>
    function confirmacion_Eliminar()
    {
        var respuesta = confirm("¿Estas seguro de querer Eliminar el Registro?");

        if (respuesta == true)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
</script>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>CONTRASEÑA</th>
            <th>FECHA INSCRIPCION</th>
            <th>ACCIONES</th>
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
                    <form action='consulta_eliminacion.php' method='POST'>
                        <input type='hidden' name='id' value='".$fila["id"]."'>
                        <input type='hidden' name='nombre' value='".$fila["nombre"]."'>
                        <input type='hidden' name='email' value='".$fila["email"]."'>
                        <input type='hidden' name='contraseña' value='".$fila["contrasena"]."'>
                        <input type='hidden' name='fecha_creacion' value='".$fila["fecha_creacion"]."'>
                        <input type='submit' name='eliminar' value='eliminar' class='eliminar' onclick='return confirmacion_Eliminar()'>
                    </form>
                </td>";
            echo "</tr>";
        }
        echo "<tr class='celda_boton'>
          <td colspan='6'>
          <form method='POST'>
          <input class='hey' type='submit'name='volver' value='Menu' formaction='formulario_menu.php'>
          </form></th> </tr> ";

        echo "</table>";

        mysqli_close($conexion);
    ?>
</body>
</html>
