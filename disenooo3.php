<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Ejemplo de HTML5">
		<meta name="keywords" content="HTML5, CSS3, JavaScript">
		<title>Pepe.com</title>
		<link rel="stylesheet" href="ejemplo2.css">
	</head>
	<body>
		<header>
			<div id="barranaranja">
				<p>Servicio al Cliente (504) 9488-2132</p>
			</div>
			<div id="barraazul">
				<p>Entrega en: 2-5 días hábiles</p>                         <p > GRATIS por compras mayores a L.950</p>
			</div>
		</header>
		<div id="agrupar">

			<div id="int">
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
						<div class="botonmodal"></div>
						<div class="botonmodal"></div>
					</ul>
				</nav>
			</div>
		</div>
		<section id="seccion">
			<article>
				<figcaption id="modelo">
					<img src="pepexd.jpg">
				</figcaption>
			</article>
		</section>

		<?php
			include("iniciarsesion.php");
			include("publicar.php");
		?>
	</body>
</html>
