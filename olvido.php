<?php 
require "php/conn.php";
require "php/session.php";
if(isset($_POST["correo"])){
	$correo = $_POST["correo"];
	// Conectar
	$sql = "SELECT * FROM usuarios WHERE correo='".$correo."'";
	$res = mysqli_query($conn, $sql);
	$n = mysqli_num_rows($res);
	if($n==1){
		$data = mysqli_fetch_assoc($res);
		$id = $data["id"];
		$mensaje = "Entra al sigueinte link para cambiar tu clave de acceso.<br>";
		$mensaje .= "<a href='localhost/ecommerce/cambiaclave.php?id=".$id.">Cambia clave de acceso</a>'";

		$header = "MiMe-Version: 1.0\r\n";
		$header .= "Content-type:text/html; charset=UTF-8\r\n";
		$header .= "From: eCommerce\r\n";
		$header .= "Replay-to: $correo\r\n";

		$asunto = "Cambiar clave de acceso";

		if(mail($correo, $asunto, $mensaje, $header)){
			header("location:olvidogracia.php");
		}else{
			$error = "Error en el envio de su correo, intentarlo mas tarde";
		}
	}else{
		$error = "El correo no existe en la base de datos";
	}
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Olvido de su clave de acceso</title>
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
						<?php
						if (isset($error)) {
							echo '<div class="alert alert-danger">';
							echo "<strong> * ".$error."</strong>";
							echo "</div>";
						}

					 ?>
				<h2 class="text-center">Olvido su contrasena?</h2>
				<form class="text-left" action="olvido.php" method="post">
					<div class="form-group">
						<label for="correo"> Correo electronico</label>
						<input type="email" name="correo" id="correo" class="form-control" required placeholder="Escribe tu correo electronico">
					</div>
					<div class="form-group text-left">
						<label for="enviar"></label>
						<input type="submit" name="enviar" id="enviar" value="Enviar" class="btn btn-success" role="button">
					</div>
				</form>								
				</div>
				<div class="well text-left" id="contenedor">
				<a href="registrarse.php" class="btn btn-info">Registrase en el sitio</a>
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
<br><br>
	<footer class="container-fluid text-center">
		<a href="aviso.php"><p>Aviso de privacidad</p></a>
		
	</footer>
</body>
</html>