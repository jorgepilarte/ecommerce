<?php 
require "php/session.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Todos los cursos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Mi Sitio</a>
			</div>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Inicio</a></li>
					<li class="active"><a href="cursos.php">Cursos</a></li>
					<li><a href="libros.php">Libros</a></li>
					<li><a href="sobremi.php">Sobre Mi</a></li>
					<li><a href="contacto.php">Contacto</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php require "php/navbar.php"; ?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron">
		<div class="container text-center">
			<h1>Todos los Cursos</h1>
			<p>Los Mejores Cursos De La Red</p>
		</div>
	</div>
	<div class="container-fluid bg-3 text-center">
		<div class="row">
			<div class="col-sm-3">
				<p><a href="producto.php">Celular</a></p>
				<a href="producto.php">
					<img src="img/cursos/iphone.png" class="img-responsive img-rounded" style="width: 100%" alt="Celular">
				</a>
				<p>Pantalla Super Retina HD.
					Pantalla OLED Multi-Touch de 5,8 pulgadas (en diagonal).
					Pantalla HDR.
					Resolución de 2.436 por 1.125 píxeles a 458 p/p.
					Contraste de 1.000.000:1 (típico)
					Pantalla True Tone.
					Pantalla con gama cromática amplia (P3)
					3D Touch.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 30,000.00</a>
			</div>
			<div class="col-sm-3">
					<p><a href="producto.php">MacBookPro</a></p>
				<a href="producto.php">
					<img src="img/cursos/macbookpro.PNG" class="img-responsive img-rounded" style="width: 100%" alt="MacBookPro">
				</a>
				<p>Pantalla Super Retina HD.
					Pantalla OLED Multi-Touch de 5,8 pulgadas (en diagonal).
					Pantalla HDR.
					Resolución de 2.436 por 1.125 píxeles a 458 p/p.
					Contraste de 1.000.000:1 (típico)
					Pantalla True Tone.
					Pantalla con gama cromática amplia (P3)
					3D Touch.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 30,000.00</a>
			</div>
			<div class="col-sm-3">
					<p><a href="producto.php">Table</a></p>
				<a href="producto.php">
					<img src="img/cursos/table.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Table">
				</a>
				<p>Pantalla Super Retina HD.
					Pantalla OLED Multi-Touch de 5,8 pulgadas (en diagonal).
					Pantalla HDR.
					Resolución de 2.436 por 1.125 píxeles a 458 p/p.
					Contraste de 1.000.000:1 (típico)
					Pantalla True Tone.
					Pantalla con gama cromática amplia (P3)
					3D Touch.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 30,000.00</a>
			</div>
			<div class="col-sm-3">
					<p><a href="producto.php">Imac</a></p>
				<a href="producto.php">
					<img src="img/cursos/imac.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Imac">
				</a>
				<p>Pantalla Super Retina HD.
					Pantalla OLED Multi-Touch de 5,8 pulgadas (en diagonal).
					Pantalla HDR.
					Resolución de 2.436 por 1.125 píxeles a 458 p/p.
					Contraste de 1.000.000:1 (típico)
					Pantalla True Tone.
					Pantalla con gama cromática amplia (P3)
					3D Touch.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 30,000.00</a>
			</div>
		</div><br>
	<div class="container-fluid bg-3 text-center">
		<div class="row">
			<div class="col-sm-3">
				<p><a href="producto.php">Airpod</a></p>
				<a href="producto.php">
					<img src="img/cursos/airpod.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Airpod">
				</a>
				<p>Pantalla Super Retina HD.
					Pantalla OLED Multi-Touch de 5,8 pulgadas (en diagonal).
					Pantalla HDR.
					Resolución de 2.436 por 1.125 píxeles a 458 p/p.
					Contraste de 1.000.000:1 (típico)
					Pantalla True Tone.
					Pantalla con gama cromática amplia (P3)
					3D Touch.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 30,000.00</a>
			</div>
			<div class="col-sm-3">
				<p><a href="producto.php">Tv</a></p>
				<a href="producto.php">
					<img src="img/cursos/tv.PNG" class="img-responsive img-rounded" style="width: 100%" alt="tv">
				</a>
				<p>Pantalla Super Retina HD.
					Pantalla OLED Multi-Touch de 5,8 pulgadas (en diagonal).
					Pantalla HDR.
					Resolución de 2.436 por 1.125 píxeles a 458 p/p.
					Contraste de 1.000.000:1 (típico)
					Pantalla True Tone.
					Pantalla con gama cromática amplia (P3)
					3D Touch.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 30,000.00</a>
			</div>
			<div class="col-sm-3">
				<p><a href="producto.php">Watch</a></p>
				<a href="producto.php">
					<img src="img/cursos/watch.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Watch">
				</a>
				<p>Pantalla Super Retina HD.
					Pantalla OLED Multi-Touch de 5,8 pulgadas (en diagonal).
					Pantalla HDR.
					Resolución de 2.436 por 1.125 píxeles a 458 p/p.
					Contraste de 1.000.000:1 (típico)
					Pantalla True Tone.
					Pantalla con gama cromática amplia (P3)
					3D Touch.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 30,000.00</a>
			</div>
			<div class="col-sm-3">
				<p><a href="producto.php">Apple</a></p>
				<a href="producto.php">
					<img src="img/cursos/apple.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Apple">
				</a>
				<p>Pantalla Super Retina HD.
					Pantalla OLED Multi-Touch de 5,8 pulgadas (en diagonal).
					Pantalla HDR.
					Resolución de 2.436 por 1.125 píxeles a 458 p/p.
					Contraste de 1.000.000:1 (típico)
					Pantalla True Tone.
					Pantalla con gama cromática amplia (P3)
					3D Touch.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 30,000.00</a>
			</div>
		</div>
	</div><br><br>
	<footer class="container-fluid text-center">
		<p>Todos los derechos reservados &copy;</p>
		<form class="form-inline">Buscar:
			<input type="text" name="buscar" id="buscar" class="form-control" size="50" placeholder="buscar producto">
			<button type="button" class="btn btn-info">Ir</button>
		</form>
	</footer>
</body>
</html>