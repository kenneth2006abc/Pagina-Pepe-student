<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="botonmodal">

        <label for="botonmodal">
            Ir a inicio
        </label>
    </div>
    <input type="checkbox" id="botonmodal">
    <div class="containermodal">
        <div class="contentmodal">
            <h2>Bienvenido</h2>
            <p>¡Hola!,un gusto te presento mi pagina Web
                el inicio de sesion funciona solo si la
                persona se registra primero e ingresa los mismos
                datos espero te guste  :]
                (la pagina tiene unos cuantos errores pero
                los corregire)<p>
                <div class="btncerrar">
                    <label for="botonmodal">
                        <a href="disenooo3.php">
                            Comenzar
                        </a>
                    </label>
                </div>
                <div class="botonredireccionar">
                    <label for="botonmodal">
                        Cerrar
                    </label>
                </div>
        </div>
        <label for="botonmodal" class="cerrarmodal"></label>
    </div>
    <?php
        include("conexion.php");
    ?>
</body>
</html>
