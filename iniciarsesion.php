<?php
    include("conexion.php"); // Conectamos la base de datos(registro) con el usuario root

    if (isset($_POST["iniciarsesion"])) // Cuando el botón de enviar formulario sea presionado inicia el codigo
    {
        //$usuario = $_POST["user"]; // Si el correo existe, verificara que su contraseña sea igual a la que ingreso el usuario
        $email = $_POST["email"]; // Es el email que el usuario ingreso para verificar si existe con la base de datos
        $contrasena = $_POST["contrasena"]; // Si el correo existe, verificara que su contraseña sea igual a la que ingreso el usuario
        

        $consulta = "SELECT * FROM inscripcion"; // Selecciona la tabla inscripcion para comparar los registros con los datos que ingreso el usuario
        $resultado = mysqli_query($conexion, $consulta); // Abre la tabla y la conecta con php

        if (mysqli_num_rows($resultado) > 0) // Si la tabla inscripcion tiene 1 o mas filas de registros, obtiene los valores de dicho registro
        {
            while ($fila  = mysqli_fetch_assoc($resultado)) // $fila obtendra el valor de todos los registros, pero no se puede comparar
            {
                $user[] = $fila["nombre"]; // user obtiene todos los nombres registrados en la base de datos
                $emails[] = $fila["email"]; // Emails obtiene todos los emails registrados en la base de datos
                $contrasenas[] = $fila["contrasena"]; // contraseñas obtiene la contraseña de cada correo de la base de datos
            }
        }

        for ($i=0; $i < mysqli_num_rows($resultado); $i++) 
        { 
            if ($emails[$i] == $email && $contrasenas[$i] == $contrasena) 
            {
                echo '
                <script>
                    alert("has iniciado sesion correctamente");
        
                    var user = document.getElementById("user").innerHTML = "'.$user[$i].'";
                </script>
                ';
            }
            else 
            {
                echo '
                <script>
                    var incorrectos = document.getElementById("incorrectos").innerHTML = "Correo electronico y/o contraseña incorrecta";
                </script>
                ';
            }
        }
    }
                
    mysqli_close($conexion);
?>