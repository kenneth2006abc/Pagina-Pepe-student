<?php
	//asignamos alas variables los valores correctos de nuestro servidor,usuario,contraseña y base de datos
	$servidor ="localhost";
	$usuario ="root";
	$contraseña ="";
	$baseDatos ="login";

	$conexion = mysqli_connect($servidor, $usuario, $contraseña, $baseDatos); // asignamos ala variable $conexion la conexion respectiva
	//ion mysqli_connec

	// hacemos una condicion que nos da de error si la conexion no se efectua correctamente o si es exitosa
	/*
	if(!$conexion)
	{
		echo '<h3 class="error">Error en la conexion</h3>';
		//die("conexion fallida:". mysqli_connect_error())
	}
	else
	{
		echo '<script>alert("Conexion Exitosa");</script>';
	}
	*/
?>
