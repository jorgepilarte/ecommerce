<?php 
require "php/conn.php";
//Detectamos si se envia la informacion
if(isset($_GET["id"])){
	$id = $_GET["id"];
	$sql = "SELECT * FROM usuarios WHERE ud=".$id;
	$res = mysqli_query($conn, $sql);
	$n = mysqli_num_rows($res);
	if($n!=1){
		//header("location:index.php");
	}else{

	}
}
if(isset($_POST["clave"])){
	$clave = $_POST["clave"];
	$clave1 = $_POST["clave1"];
	$id = $_POST["id"];
	if($clave==$clave1){
		$clave = hash_hmac("sha512", $clave, "1234");
		$sql = "UPDATE usuarios SET clave='".$clave."' WHERE id=".$id;
		if(mysqli_query($conn, $sql)){
			header("location:cambiaclavegracia.php");
		} else {
			$error = "Error al actualizar la clave de acceso";
		}
	}else{
		$error = "Las clave no coiciden";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cambia clave</title>
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
				<h2 class="text-center">Cambia clave </h2>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					
					<div class="form-group text-left">
						<label for="clave">* Clave:</label>
						<input type="password" name="clave" id="clave" class="form-control" required placeholder="Escriba su clave">
					</div>
					<div class="form-group text-left">
						<label for="clave1">* Confirmar clave:</label>
						<input type="password" name="clave1" id="clave1" class="form-control" required placeholder="Escriba su clave1">
					</div>
					
					<div class="form-group text-left">
						<label for="enviar"></label>
						<input type="submit" name="enviar" id="enviar" value="Enviar" class="btn btn-success" role="button">
					</div>
					<div class="form-group text-left">
						<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id; ?>">
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