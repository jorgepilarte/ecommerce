<?php 
require "php/session.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Todo sobre mi</title>
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
					<li class="active"><a href="sobremi.php">Sobre Mi</a></li>
					<li><a href="contacto.php">Contacto</a></li>
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
						<li><a href="index.php">Inicio</a></li>
						<li class="active">Carrito</li>
					</ol>
					<table class="table-striped" width="100%">
						<tr>
							<th width="12%">Producto</th>
							<th width="58%">Descripcion</th>
							<th width="2%">Cant.</th>
							<th width="10%">Precio</th>
							<th width="10%">SubTotal</th>
							<th width="1%"></th>
							<th width="7%">Borrar</th>
						</tr>
						<tr>
							<td><img src="img/iphone.png" width="105" alt="iphone"></td>
							<td><p>El iPhone X cuenta con una pantalla de 5.8 pulgadas que abarca todo el frente del teléfono, dejando un espacio arriba para acomodar todos los sensores que contribuyen a Face ID, el nuevo método de desbloqueo por rostro, ya que el botón Touch ID desaparece</p></td>
							<td>1</td>
							<td>RD$ 200.00</td>
							<td>RD$ 200.00</td>
							<td>&nbsp;</td>
							<td><a href="#" class="btn btn-danger">Borrar</a></td>
						</tr>
					</table>
					<hr>
					<table width="100%" class="text-right">
						<tr>
							<td width="79%"></td>
							<td width="11%">Subtoal</td>
							<td width="10%">RD$150.00</td>
						</tr>
						<tr>
							<td></td>
							<td>Descuento</td>
							<td>RD$0.00</td>
						</tr>
						<tr>
							<td></td>
							<td>Costo envio</td>
							<td>RD$0.00</td>
						</tr>
						<tr>
							<td></td>
							<td>Descuento</td>
							<td>RD$0.00</td>
						</tr>
						<tr>
							<td></td>
							<td>Total</td>
							<td>RD$0.00</td>
						</tr>
						<tr>
							<td><a href="index.php" class="btn btn-info" role="button">Seguir comprando</a></td>
							<td><a href="#" class="btn btn-info" role="button">Recalcular</a></td>
							<td><a href="checkout.php" class="btn btn-success" role="button">Pagar</a></td>
						</tr>
					</table>
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
	</div><br><br>
		<footer class="container-fluid text-center">
		<a href="aviso.php"><p>Aviso de privacidad</p></a>
		
		</footer>

</body>
</html>