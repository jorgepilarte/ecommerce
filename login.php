<?php 
require "php/conn.php";
if(isset($_POST["correo"])){
	$correo=$_POST["correo"];
	$clave=$_POST["clave"];
	$clave2= hash_hmac("sha512", $clave, "1234");
	$recordame = $_POST["recordame"];
	//Recordame
	$nombre = "datos";
	$valor = $correo."|".$clave;
	if($recordame=="on"){
		$fecha = time() + (60*60*24*7);
	}else{
		$fecha = time() -1;
	}
	setcookie($nombre, $valor, $fecha);
//Creamos el query
$sql="SELECT *FROM usuarios WHERE correo='".$correo."' AND clave='".$clave2."'";
$res= mysqli_query($conn, $sql);
$n= mysqli_num_rows($res);
//Clave y usuario correcto
if($n==1){
	//Pasamos los datos a un objeto
	$usuario= mysqli_fetch_assoc($res);
	//iniciar seccion
	session_start();
	//Creamos la variable de session
	$_SESSION['usuario']=$usuario;
	//Saltamos al index
	header("location:index.php");
}else {
	$error ="El correo o la clave son incorrecto verificar";
}
}
$datos = $_COOKIE["datos"];
$correo = "";
$clave = "";
$recordame = "";
if(isset($datos)){
	$aDatos = explode("|", $datos);
	$correo = $aDatos[0];
	$clave = $aDatos[1];
	$recordame = "checked";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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
				<h2 class="text-center">Iniciar sesion </h2>
				<form class="text-left" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="form-group">
						<label for="correo"> Correo electronico</label>
						<input type="correo" name="correo" id="correo" value="<?php echo $correo; ?>" class="form-control" required placeholder="Escribe tu correo electronico">
					</div>
					<div class="form-group">
						<label for="clave"> Clave de acceso</label>
						<input type="password" name="clave" id="clave" value="<?php echo $clave; ?>" class="form-control" required placeholder="Escribe tu clave de acceso">
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="recordame" <?php echo $recordame; ?>>Recordarme</label>
					</div>
					<div class="form-group text-left">
						<label for="entrar"></label>
						<input type="submit" name="entrar" id="entrar" value="Entrar" class="btn btn-success" role="button">
					</div>
				</form>								
				</div>
				<div class="well text-left" id="contenedor">
				<a href="olvido.php" class="btn btn-info">Olvido su contrasena?</a>
				<br><br>
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