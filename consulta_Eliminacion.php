<?php
    include("ConexionABD.php");

    if (isset($_POST["eliminar"]))
    {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];

        $eliminar = "DELETE FROM inscripcion WHERE id=?";

        $sentencia = mysqli_prepare($conexion, $eliminar);

        mysqli_stmt_bind_param($sentencia, "i", $id);

        mysqli_stmt_execute($sentencia);

        $afectado = mysqli_stmt_affected_rows($sentencia);

        if($afectado==1)
        {
            echo "<script> alert ('El registro [$nombre] se elimino correctamente'); location.href='formulario_menu.php'; </script>";
        }
        else
        {
            echo "<script> alert ('El usuario [$nombre] no se elimino correctamente '); location.href=.'eliminacion.php';</script>";
        }
    }
?>
