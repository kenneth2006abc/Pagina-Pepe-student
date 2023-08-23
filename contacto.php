<!DOCTYPE html>
<html lang="es">
	<head>
			<meta charset="uft-8">
			<meta name="description" content="Ejemplo de HTML5">
			<meta name="keywords" content="HTML5, CSS3, JavaScript">
			<title>Este texto es el titulo del documento</title>
			<link rel="stylesheet" href="ejemplo2.css">
	</head>

	<body>
		<header>
			<div id="barranaranja">
				<p>Servicio al Cliente (504) 9488-2132</p>
			</div>
			<div id="barraazul">
				<p style="position: relative; right: 480px; display: block;">Entrega en: 2-5 días hábiles</p>                         <p style="position: relative; left: 510px; display: block; bottom: 15px;"> GRATIS por compras mayores a L.950</p>
			</div>
		</header>
			<div id="agrupar">
				<div id="logo">
					<a href="disenooo3.php">
						<img class="pepe" src="pepe.jpg">
					</a>
				</div>
				<div class="botonmodal">
					<h2 id="user"></h2>
						<label for="botonmodal" style="font-family: century gothic;">
							Inicia Sesion
						</label>
						</div>
						<input type="checkbox" id="botonmodal">
							<div class="containermodal">
								<div class="contentmodal">
									<h2>Iniciar Sesion</h2>

									<form method="post">
									<label style="font-family: century gothic;" for="username">EMAIL</label>
									<input type="email" id="user" name="email" placeholder="email" required>
									<label style="font-family: century gothic;" for="password">PASSWORD</label>
									<input type="password" id="password" name="contrasena" placeholder="password" required>
									<div class="btncerrar">
										<input type="submit" name="iniciarsesion" value="Iniciar sesión">
									</div>
									<div class="botonredireccionar">
										<label for="botonmodal" style="font-family: century gothic;">
											Cerrar
										</label>
									</div>
									<p>¿No tienes una cuenta? <a href="formulario_registro.php">Regístrate aquí</a></p>
									</div>
									<label for="botonmodal" class="cerrarmodal">
									</label>
							</div>
							<div id="menu">
								<nav>
									<ul>
										<li class="principal"><a href="hombre.html">Hombre</a></li>
										<li class="fotos"><a href="fotos.html">Mujer</a></li>
										<li class="videos"><a href="videos.html">Infantil(0-16)</a></li>
										<li class="videos"><a href="formulario_menu.php">Otros</a></li>
									</ul>
								</nav>
							</div>
						</header>
						<div id="seccioncomentarios">
							<form method="post">
								<p>Que te parecio nuestra pagina web?</p>
									<div id="infouser">
										<span id="nameuser">Kenneth</span>
										<span id="emailuser">Kenneth@gmail.com</span>
								</div>
								<textarea name="cajadecomentarios" id="cajadecomentarios" cols="30" rows="10"></textarea>
									<input type="submit" name="comentar" value="Publicar">
								<a href = "disenooo3.php">volver</a>
							</form>
						</div>
						<?php
						include("iniciarsesion.php");
						include ("comentar.php");
						?>
	</body>
</html>
