<?php
	//asignamos alas variables los valores correctos de nuestro servidor,usuario,contraseña y base de datos
	$servidor ="localhost";
	$usuario ="root";
	$contraseña ="";
	$baseDatos ="login";

	$conexion = mysqli_connect($servidor, $usuario, $contraseña, $baseDatos); // asignamos ala variable $conexion la conexion respectiva


?>
