<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Actualizar</title>
</head>
<body>
    <?php
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password = $_POST["contraseña"];

        if (isset($_POST["update"]))
        {
            include("ConexionABD.php");

            $update = "UPDATE inscripcion SET nombre=?, email=?, contrasena=? WHERE id=?";

            $sentencia = mysqli_prepare($conexion, $update);

            mysqli_stmt_bind_param($sentencia, "sssi", $nombre, $email, $password, $id);

            mysqli_stmt_execute($sentencia);

            $afectado = mysqli_stmt_affected_rows($sentencia);

            if($afectado==1)
            {
                echo "<script> alert ('El registro [$nombre] se actualizo correctamente'); location.href='formulario_menu'; </script>";
            }
            else
            {
                echo "<script> alert ('El registro [$nombre] no se actualizo correctamente '); location.href=.'actualizacion.php';</script>";
            }

            mysqli_stmt_close($sentencia);

            mysqli_close($conexion);
        }
    ?>

    <form action="consulta_Actualizar.php" method="POST">
        <h3>Actualizacion de Registro</h3>
        <div class="input-wrapper">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="nombre" placeholder="Nombre" min="1" autofocus value="<?php echo $nombre; ?>">

        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email" value="<?php echo $nombre; ?>">

        </div>
        <div class="input-wrapper">
            <input type="text" name="contraseña" placeholder="contraseña" value="<?php echo $password; ?>">

        </div>
        <input class="btn" type="submit" name="update" value="Actualizacion">
        <input type="submit" class="btn" value="Pagina Principal" name="actualizacion" formaction="disenooo3.php">
    </form>
</body>
</html>
