<?php 
require "php/session.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mi Sitio</title>
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
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="cursos.php">Cursos</a></li>
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
			<h1>Los Mejores Productos de la Red</h1>
			<p>Nuestro slogan</p>
		</div>
	</div>
	<div class="container-fluid bg-3 text-center">
		<div class="row">
			<div class="col-sm-3">
				<p><a href="producto.php">Celular</a></p>
				<a href="producto.php">
					<img src="img/iphone.png" class="img-responsive img-rounded" style="width: 100%" alt="Celular">
				</a>
			</div>
			<div class="col-sm-3">
					<p><a href="producto.php">MacBookPro</a></p>
				<a href="producto.php">
					<img src="img/macbookpro.PNG" class="img-responsive img-rounded" style="width: 100%" alt="MacBookPro">
				</a>
			</div>
			<div class="col-sm-3">
					<p><a href="producto.php">Table</a></p>
				<a href="producto.php">
					<img src="img/table.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Table">
				</a>
			</div>
			<div class="col-sm-3">
					<p><a href="producto.php">Imac</a></p>
				<a href="producto.php">
					<img src="img/imac.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Imac">
				</a>
			</div>
		</div><br>
	</div>
	<div class="container-fluid bg-3 text-center">
		<div class="row">
			<div class="col-sm-3">
				<p><a href="producto.php">Airpod</a></p>
				<a href="producto.php">
					<img src="img/airpod.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Airpod">
				</a>
			</div>
			<div class="col-sm-3">
				<p><a href="producto.php">Tv</a></p>
				<a href="producto.php">
					<img src="img/tv.PNG" class="img-responsive img-rounded" style="width: 100%" alt="tv">
				</a>
			</div>
			<div class="col-sm-3">
				<p><a href="producto.php">Watch</a></p>
				<a href="producto.php">
					<img src="img/watch.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Watch">
				</a>
			</div>
			<div class="col-sm-3">
				<p><a href="producto.php">Apple</a></p>
				<a href="producto.php">
					<img src="img/apple.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Apple">
				</a>
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