<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscripcion</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form id="frm" method="POST">
            <h2>Bienvenido</h2>
            <p>Registro</p>

            <div class="input-wrapper">
                <input type="text" name="nombre" placeholder="Nombre" min="1">
                <img class="input-icon" src="iconosIndex/name.svg">
            </div>
            <div class="input-wrapper">
                <input type="email" name="email" placeholder="Email">
                <img class="input-icon" src="iconosIndex/email.svg">
            </div>
            <div class="input-wrapper">
                <input type="password" name="contraseña" placeholder="Contraseña">
                <img class="input-icon" src="iconosIndex/password.svg">
            </div>
                <input id="btnRegistro" class="btn" type="submit" name="registro" value="Enviar">
            </form>

        <!-- aperturamos codigo PHP para utilizar la funcion include, la cual nos permite conectar esta pagina con la registrar.php-->
        <?php
            include("../InsercionABD.php");
        ?>
    </body>
</html>