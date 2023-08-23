<?php
	include ("conexion.php"); //hacemos la inclusion de la pagina donde tenemos la conexion realizada

	//por medio de in IF y usando la funcion PHP isset( ) verificamos si se ha realizado el clickeo en el submit registro
	if (isset($_POST['registro']))
    {


        //si cumple l condicion, seasigna el valor a cada variable el valor recibido del formulario por medio del metodo POST
        //ademas eliminamos cualquier espacio que aya antes o despues de los valores utilizando la funcion PHP trim( )
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $contrasena = trim($_POST['contrasena']);

        // por medio de otro IF dentro del anterior, y utilizando la funcion PHP strlen( ) verificamos que cada variable tenga al menos un caracter
        if (strlen($nombre)>=1 &&  strlen($email)>=1 && strlen($contrasena)>=1)
        {
            // si cumple la condicion de arriba, se inicia el proceso seguro de insercion de datos que evita la inyeccion de codigo terceros
            //mediante la creacion de la variable $insertar la cual tendra la cadena MYSQL para insertar los valores en la tabla inscripcione,en VALUES utilizando los signos ? como parametros de insercion
            $insertar = "INSERT INTO inscripcion(nombre, email, contrasena) VALUES(?,?,?)";


            // declaramos la variable $sentencia la cual se le asigna la funcion "mysqli_prepare" la cual como parametros  recibe la cadena de conexion a la base de datos y el contenido MYSQL INSERTAR
            $sentencia = mysqli_prepare($conexion, $insertar);

            //por medio de la funcion "mysqli_stmt_bind_param" pasamos los valores que contienen las variables $nombre, $email y $contraseña
            //a la variable $sentencia, ademas usamos entre comillas sss las cuales actuan como parametros de vinculcion a los valores a
            //insertar, cada "s" representa el valor  a insertar ademas del tipo de dato "s" corresponde  al tipo string
            mysqli_stmt_bind_param($sentencia, "sss", $nombre, $email, $contrasena);

            //ahora la funcion "mysqli_stmt_execute" ejecuta la sentencia MYSQL ya asignada con sus valores en la variable $sentencia
            mysqli_stmt_execute($sentencia);

            //seguido de lo anterior se asigna ala variable $afectando la funcion "mysqli_stmt_affected_rows" con el numero de columnas afectadas en la insercion la base de datos
            $afectado = mysqli_stmt_affected_rows($sentencia);

            // de ultimo, mediante un if comparamos el valor de las filas afectadas cacturado por la funcon "mysqli_stmt_affected_rows" y asignamos en la variable $afectado y comparamos si es igual a 1
            //si cumple con la condicion, se ejecuta mediante un echo de un mensaje de javascript que indica que el usuario se insrto y ademas nos dirige al index del formulario

                if($afectado==1)
                {
                    echo "<script> alert ('El usuario [$nombre] se agrego correctamente'); location.href='disenooo3.php'; </script>";
                    //si no inserccion no se realiza correctamente, nos musetra mensaje de error y nos redirige al formulario index para insertar y debemos de verificar nuestro codigo de regitro
                }
                else
                {
                    echo "<script> alert ('El usuario [$nombre] no se agrego correctamente '); location.href=.'disenooo3.php';</script>";
                }
            // este else, se activa si haemos dejado algun input del formulario de inscripcion vacio.

        }
        else
        {
            echo '<h3 class="error" style="display: flex; bottom: 200px;  position: relative; right:340px; color: red;">Debes de llenar todos las cajas</h3>';
        }
    }
?>
