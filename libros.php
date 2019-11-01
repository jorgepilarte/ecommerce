<?php 
require "php/session.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Todos los libros</title>
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
					<li><a href="cursos.php">Cursos</a></li>
					<li class="active"><a href="libros.php">Libros</a></li>
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
			<h1>Todos los libros</h1>
			<p>Los Mejores CLibros De La Red</p>
		</div>
	</div>
	<div class="container-fluid bg-3 text-center">
		<div class="row">
			<div class="col-sm-3">
				<p><a href="producto.php">Libro</a></p>
				<a href="producto.php">
					<img src="img/libros/libro.png" class="img-responsive img-rounded" style="width: 100%" alt="Libros">
				</a>
				<p>Un libro se compone de un número de páginas y tiene dos niveles capítulos y subcapítulos que aparecen en una tabla de contenidos navegable. Cada página contiene algún tipo de contenido, habitualmente texto. Los contenidos del libro pueden ser organizados en capítulos.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 3,000.00</a>
			</div>
			<div class="col-sm-3">
					<p><a href="producto.php">Libro I</a></p>
				<a href="producto.php">
					<img src="img/libros/libro1.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Libros">
				</a>
				<p>Un libro se compone de un número de páginas y tiene dos niveles capítulos y subcapítulos que aparecen en una tabla de contenidos navegable. Cada página contiene algún tipo de contenido, habitualmente texto. Los contenidos del libro pueden ser organizados en capítulos.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 300.00</a>
			</div>
			<div class="col-sm-3">
					<p><a href="producto.php">Libro II</a></p>
				<a href="producto.php">
					<img src="img/libros/libro2.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Libros">
				</a>
				<p>Un libro se compone de un número de páginas y tiene dos niveles capítulos y subcapítulos que aparecen en una tabla de contenidos navegable. Cada página contiene algún tipo de contenido, habitualmente texto. Los contenidos del libro pueden ser organizados en capítulos.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 3,000.00</a>
			</div>
			<div class="col-sm-3">
					<p><a href="producto.php">Libro III</a></p>
				<a href="producto.php">
					<img src="img/libros/libro3.PNG" class="img-responsive img-rounded" style="width: 100%" alt="libros">
				</a>
				<p>Un libro se compone de un número de páginas y tiene dos niveles capítulos y subcapítulos que aparecen en una tabla de contenidos navegable. Cada página contiene algún tipo de contenido, habitualmente texto. Los contenidos del libro pueden ser organizados en capítulos.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 5,000.00</a>
			</div>
		</div><br>
	<div class="container-fluid bg-3 text-center">
		<div class="row">
			<div class="col-sm-3">
				<p><a href="producto.php">Libro IV</a></p>
				<a href="producto.php">
					<img src="img/libros/libro4.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Libros">
				</a>
				<p>Un libro se compone de un número de páginas y tiene dos niveles capítulos y subcapítulos que aparecen en una tabla de contenidos navegable. Cada página contiene algún tipo de contenido, habitualmente texto. Los contenidos del libro pueden ser organizados en capítulos.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 1,000.00</a>
			</div>
			<div class="col-sm-3">
				<p><a href="producto.php">Libro V</a></p>
				<a href="producto.php">
					<img src="img/libros/libro5.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Libros">
				</a>
				<p>Un libro se compone de un número de páginas y tiene dos niveles capítulos y subcapítulos que aparecen en una tabla de contenidos navegable. Cada página contiene algún tipo de contenido, habitualmente texto. Los contenidos del libro pueden ser organizados en capítulos.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 9000.00</a>
			</div>
			<div class="col-sm-3">
				<p><a href="producto.php">Libro VI</a></p>
				<a href="producto.php">
					<img src="img/libros/libro6.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Libros">
				</a>
				<p>Un libro se compone de un número de páginas y tiene dos niveles capítulos y subcapítulos que aparecen en una tabla de contenidos navegable. Cada página contiene algún tipo de contenido, habitualmente texto. Los contenidos del libro pueden ser organizados en capítulos.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 2,000.00</a>
			</div>
			<div class="col-sm-3">
				<p><a href="producto.php">Libro VII</a></p>
				<a href="producto.php">
					<img src="img/libros/libro6.PNG" class="img-responsive img-rounded" style="width: 100%" alt="Libros">
				</a>
				<p>Un libro se compone de un número de páginas y tiene dos niveles capítulos y subcapítulos que aparecen en una tabla de contenidos navegable. Cada página contiene algún tipo de contenido, habitualmente texto. Los contenidos del libro pueden ser organizados en capítulos.</p>
				<a href="producto.php" class="btn btn-info"> RD$ 4,000.00</a>
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