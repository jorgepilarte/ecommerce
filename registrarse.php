<?php 
require "php/conn.php";
//Detectamos si se envia la informacion
if(isset($_POST["nombre"])){
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$apellidomaterno=$_POST["apellidomaterno"];
	$correo=$_POST["correo"];
	$clave=$_POST["clave"];
	$clave1=$_POST["clave1"];
	$telefono=$_POST["telefono"];
	$direccion=$_POST["direccion"];
	$sector=$_POST["sector"];
	$ciudad=$_POST["ciudad"];
	$provincia=$_POST["provincia"];
	$pais=$_POST["pais"];
	$codigopostal=$_POST["codigopostal"];
	$errores=array();
	if($nombre==""){
		$errores[0]="El nombre es requerido";
	}else if($apellido==""){
		$errores[1]="El apellido es requerido";
	}else if($correo==""){
		$errores[2]="El correo es requerido";
	}else if($telefono==""){
		$errores[3]="El telefono es requerido";
	}else if($direccion==""){
		$errores[4]="La direccion es requerido";
	}else if($sector==""){
		$errores[5]="El sector es requerido";
	}else if($ciudad==""){
		$errores[6]="La ciudad es requerido";
	}else if($provincia==""){
		$errores[7]="La provincia es requerido";
	}else if($pais==""){
		$errores[8]="El pais es requerido";
	}else if($clave==""){
		$errores[11]="El clave es requerido";
	}else{		
		if(validaCorreco($correo, $conn)){
			$clave = hash_hmac("sha512", $clave, "1234");
			$clave1 = hash_hmac("sha512", $clave1, "1234");
		$sql="INSERT INTO usuarios VALUES(0, ";
		$sql .="'" . $nombre . "', '" . $apellido . "',";
		$sql .="'" . $apellidomaterno . "', '" . $correo . "',";
		$sql .="'" . $clave . "', '" . $clave1 . "',";
		$sql .="'" . $telefono . "', '" . $direccion . "',";
		$sql .="'" . $sector . "', '" . $ciudad . "',";
		$sql .="'" . $provincia . "', '" . $pais . "',";
		$sql .="'" . $codigopostal . "')";

		if(mysqli_query($conn, $sql)){
			header("location:registrogracia.php");
		}else{
			$errores[10]="Error en la insercion en la base de datos";
		}
	}else{
		$errores[9]="Ya existe el correo en la base de datos";
	}
	}
}
function validaCorreco($correo, $conn){
	$sql="SELECT *FROM usuarios WHERE correo='". $correo . "'";
	$res= mysqli_query($conn, $sql);
	$n= mysqli_num_rows($res);
	$bandera= ($n==0)? true : false;
	return $bandera;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contacto</title>
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
						if (isset($errores)>0) {
							echo '<div class="alert alert-danger">';
							foreach ($errores as $key => $valor) {
								echo "<strong> * ".$valor."</strong>";
								}
								echo "</div>";
						}

					 ?>
				<h2 class="text-center">Registrarse </h2>
				<p>Favor de registrar sus datos</p>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
						<label for="clave">* Clave:</label>
						<input type="password" name="clave" id="clave" class="form-control" required placeholder="Escriba su clave">
					</div>
					<div class="form-group text-left">
						<label for="clave1">* Confirmar clave:</label>
						<input type="password" name="clave1" id="clave1" class="form-control" required placeholder="Escriba su clave1">
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
						<input type="text" name="provincia" id="provincia" class="form-control"  placeholder="Escriba su provincia ">
					</div>
					<div class="form-group text-left">
						<label for="pais"> Pais:</label>
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