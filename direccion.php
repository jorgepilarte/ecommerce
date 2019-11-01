<?php 
require "php/session.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Datos de envio</title>
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
					<li><a href="libros.php">Libros</a></li>
					<li><a href="sobremi.php">Sobre Mi</a></li>
					<li class="active"><a href="contacto.php">Contacto</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php require "php/navbar.php"; ?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid text-center">
		<div class="row content">
			<div class="col-sm-2 sidenav">
				<h3>Lo mas vendido</h3>
				<div class="well">Iphone <a href="producto.php"><img src="img/iphone.png" class="media-object img-responsive" width="100%"></a>
				</div>
				<div class="well">Tv <a href="producto.php"><img src="img/tv.png" class="media-object img-responsive" width="100%"></a>
				</div>
				<div class="well">Table <a href="producto.php"><img src="img/table.png" class="media-object img-responsive" width="100%"></a>
				</div>
			</div>
			<div class="col-sm-8 text-left">
				<div class="well" id="contenedor">
					<ol class="breadcrumb">
						<li><a href="checkout.php">Iniciar seccion</a></li>
						<li class="active">Datos envio</li>
						<li>Forma pago</li>
						<li>Revisar</li>
					</ol>
				<h2 class="text-center">Datos de envio </h2>
				<p>Favor de verificar los siguientes datos de envio</p>
				<form action="pago.php">
					<div class="form-group text-left">
						<label for="nombre">* Nombre:</label>
						<input type="text" name="nombre" id="nombre" class="form-control" required placeholder="Escriba su nombre">
					</div>
					<div class="form-group text-left">
						<label for="apellido">* Apellido:</label>
						<input type="text" name="apellido" id="apellido" class="form-control" required placeholder="Escriba su apellido">
					</div>
					<div class="form-group text-left">
						<label for="apellidomaterno"> Apellido materno:</label>
						<input type="text" name="apellidomaterno" id="apellidomaterno" class="form-control"  placeholder="Escriba su segundo apellido ">
					</div>
					<div class="form-group text-left">
						<label for="correo">* Correo:</label>
						<input type="email" name="correo" id="correo" class="form-control" required placeholder="Escriba su correo">
					</div>
					<div class="form-group text-left">
						<label for="telefono">* Telefono:</label>
						<input type="text" name="telefono" id="telefono" class="form-control" required placeholder="Escriba su telefono">
					</div>
					<div class="form-group text-left">
						<label for="direccion">* Direcion:</label>
						<input type="text" name="direccion" id="direccion" class="form-control" required placeholder="Escriba su direccion">
					</div>
					<div class="form-group text-left">
						<label for="sector"> Sector:</label>
						<input type="text" name="sector" id="sector" class="form-control"  placeholder="Escriba su sector ">
					</div>
					<div class="form-group text-left">
						<label for="ciudad"> Ciudad:</label>
						<input type="text" name="ciudad" id="ciudad" class="form-control"  placeholder="Escriba su ciudad ">
					</div>
					<div class="form-group text-left">
						<label for="provinvia"> Provincia:</label>
						<input type="text" name="provinvia" id="provinvia" class="form-control"  placeholder="Escriba su provinvia ">
					</div>
					<div class="form-group text-left">
						<label for="pais"> Sector:</label>
						<input type="text" name="pais" id="pais" class="form-control"  placeholder="Escriba su pais ">
					</div>
					<div class="form-group text-left">
						<label for="codigopostal"> Codigo postal:</label>
						<input type="text" name="codigopostal" id="codigopostal" class="form-control"  placeholder="Escriba su codigopostal ">
					</div>
					<div class="form-group text-left">
						<label for="enviar"></label>
						<input type="submit" name="enviar" id="enviar" value="Enviar" class="btn btn-success" role="button">
					</div>
				</form>
			</div>
			</div>	
			<div class="col-sm-2 sidenav">
				<h3>Producto relacionado</h3>
				<div class="well">Watch <a href="producto.php"><img src="img/watch.png" class="media-object img-responsive" width="100%"></a>
				</div>
				<div class="well">Airpod <a href="producto.php"><img src="img/airpod.png" class="media-object img-responsive" width="100%"></a>
				</div>
				<div class="well">Imac <a href="producto.php"><img src="img/imac.png" class="media-object img-responsive" width="75%"></a>
				</div>
			</div>
		</div><br>
	</div>	<br><br>
		<footer class="container-fluid text-center">
		<a href="aviso.php"><p>Aviso de privacidad</p></a>
		
		</footer>
</body>
</html>