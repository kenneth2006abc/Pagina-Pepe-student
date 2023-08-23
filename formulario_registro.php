<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <div class="botonmodal">
        <label for="botonmodal" style="font-family: century gothic;">
            Inicia Sesion UwU
        </label>
        </div>
            <input type="checkbox" id="botonmodal">
                <div class="containermodal">
                    <div class="contentmodal">
                        <h2>Registrate</h2>
                        <p style="font-family: century gothic;"><p>
                    <form method="post">
                            <input type="text" id="name" name="nombre" placeholder="Nombre">
                            <input type="email" id="email" name="email" placeholder="Correo electronico">
                            <input type="password" id="password" name="contrasena" placeholder="contraseña">
                            <input type="submit" name="registro" value="Registrarse">

                                <div class="btncerrar">
                                    <label for="botonmodal" style="font-family: century gothic;">
                                      <a href="disenooo3.php">cerrar</a>
                                    </label>
                                </div><!--
                                <div class="botonredireccionar">
                                    <label for="botonmodal" style="font-family: century gothic;"><a href="disenooo3.php">
                                        Cerrar
                                    </label>
                                </a>
                        -->
                        </form>
                        <!--
                        <label for="botonmodal" class="cerrarmodal">

                            </label>
-->
                    </div>
                    <?php
                            include("InsercionABD.php");
                    ?>
</body>
</html>
