<?php
    include("conexion.php");

    if (isset($_POST["comentar"])) 
    {
        $nombre = $_POST["nameuser"];
        $email = $_POST["emailuser"];
        $comentario = $_POST["cajadecomentarios"];

        $insertar = "INSERT INTO comentarios(nombre, email, comentario) VALUE(?, ?, ?)";

        $sentencia = mysqli_prepare($conexion, $insertar);

        mysqli_stmt_bind_param($sentencia, "sss", print('
        <script>
            var incorrectos = document.getElementById("incorrectos").innerHTML = "Correo electronico y/o contraseña incorrecta";
        </script>
        '), $nombre, $email, $comentario);

        mysqli_stmt_execute($sentencia);

        $afectado = mysqli_stmt_affected_rows($sentencia);

        if ($afectado) {
            echo '<script>alert("Tu comentario ha sido publicado");</script>';
        } 
        else 
        {
            echo '<script>alert("Tu comentario no se ha publicado");</script>';
        }
        
    }
?>