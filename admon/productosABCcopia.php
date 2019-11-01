<?php 
require "../php/conn.php";
require "../php/funciones.php";
//Modo de la pagina
//S - consulta
//A - alta
//B - borrar
//C - cambiar
if(isset($_GET["m"])){
	$m = $_GET["m"];
} else {
	$m = "S";
}
//Elimina producto
if ($m=="B") {
	$id = $_GET["id"];
	$sql = "DELETE FROM productos WHERE id=".$id;
	if(mysqli_query($conn, $sql)){
		header("location:productosABC.php");
	} else {
		$errores = array("Error al eliminar el registro");
	}
}

//Detectamos si se envia la informacion
if(isset($_POST["nombre"])){
	//Variable de trabajo
	$errores = array();
	//Validacion
	//Recuperamos el id
	$id = (isset($_POST["id"]))?$_POST["id"]:"";
	$nombre=$_POST["nombre"];
	$descripcion=$_POST["descripcion"];
	$publico=$_POST["publico"];
	$objetivo=$_POST["objetivo"];
	$necesario=$_POST["necesario"];
	//Validacion de los numeros
	$precio=($_POST["precio"]=="")?0:$_POST["precio"];
	$descuento=($_POST["descuento"]=="")?0:$_POST["descuento"];
	$envio=($_POST["envio"]=="")?0:$_POST["envio"];
	$imagen=$_POST["imagen"];
	$fecha=$_POST["fecha"];
	$relacion1=$_POST["relacion1"];
	$relacion2=$_POST["relacion2"];
	$relacion3=$_POST["relacion3"];
	$vendido=($_POST["vendido"]=="")?"0":"1";
	$nuevo=($_POST["nuevo"]=="")?"0":"1";
	//Validaciones
	if($nombre==""){
		array_push($errores, "El nombre del curso es necesario");
	} else if($descripcion==""){
		array_push($errores, "La descripcion es requerida");
	} else if($publico==""){
		array_push($errores, "El publico ojectivo es requerido");
	} else if($objetivo==""){
		array_push($errores, "Los objetivos son requerido");
	} else if($precio<=0 || $precio>99999.99){
		array_push($errores, "El precio estaa fuera del rango");
	} else if($precio<$descuento){
		array_push($errores, "El precio no debe ser menor descuento");
	} else if(is_numeric($precio)==false){
		array_push($errores, "El precio es requerido");
	} else if(is_numeric($descuento)==false){
		array_push($errores, "El descuento es requerido");
	} else if (is_numeric($envio)==false){
		array_push($errores, "El envio es requerido");
	} else if($fecha==""){
		array_push($errores, "La fecha requerido");
	} else if(validaFecha($fecha)==false){
		array_push($errores, "Fecha erronea");
	 } else {
	 	//Verificamos que el archivo haya sido enviado
	 	//Remplazamos caracteres especiales
	 		$buscar = array(' ', '*', '!', '@', '?','á','é', 'í', 'ó','ú','Á','É','Í','Ó','Ú','Ñ','ñ','Ü','ü');
	 		$remplazar = array('-', '', '', '', '', 'a','e', 'i', 'o','u','A','E','I','O','U','N','n','U','u');
	 		$imagen = str_replace($buscar, $remplazar, $nombre);
	 		$imagen = $imagen. ".jpg";
	 		$imagen = strtolower($imagen);
	 	if(is_uploaded_file($_FILES['imagen']['tmp_name'])){

	 		//Copiamos del area temporal a nuestra carpeta
	 		copy($_FILES['imagen']['tmp_name'],"../img/".$imagen);
	 		//Optimizar el archivo
	 		validaImagen($imagen, 240);
	 	} else {
	 		array_push($errores, "Error en la carga de archivo");
	 	}
	 	//
	 	$desc_escapado = escapaCadena($descripcion);
	 	//
	 	if ($id="") {
	 		$sql = "INSERT INTO productos VALUES(0,'0','".$nombre."', ";
			$sql .= "'".$desc_escapado."', ";
			$sql .= "'".$publico."', ";
			$sql .= "'".$objetivo."', ";
			$sql .= "'".$necesario."', ";
			$sql .= $precio.", ";
			$sql .= $descuento.", ";
			$sql .= $envio.", ";
			$sql .= "'".$imagen."', ";
			$sql .= "'".$fecha."', ";
			$sql .= "'".$relacion1."', ";
			$sql .= "'".$relacion2."', ";
			$sql .= "'".$relacion3."', ";
			$sql .= "'".$vendido."', ";
			$sql .= "'".$nuevo."', ";
			$sql .= "'', "; //autor
			$sql .= "'', "; //editorial
			$sql .= "0)";	//pag
	 	} else {
	 		$sql = "UPDATE productos SET ";
	 		$sql .= "nombre = '".$nombre."', ";
			$sql .= "descripcion = '".$desc_escapado."', ";
			$sql .= "publico = '".$publico."', ";
			$sql .= "objetivo = '".$objetivo."', ";
			$sql .= "necesario = '".$necesario."', ";
			$sql .= "precio = ".$precio.", ";
			$sql .= "descuento = ".$descuento.", ";
			$sql .= "envio = ".$envio.", ";
			$sql .= "imagen = '".$imagen."', ";
			$sql .= "fecha = '".$fecha."', ";
			$sql .= "relacion1 = '".$relacion1."', ";
			$sql .= "relacion2 = '".$relacion2."', ";
			$sql .= "relacion3 = '".$relacion3."', ";
			$sql .= "masvendido = '".$vendido."', ";
			$sql .= "nuevos = '".$nuevo."', ";
			$sql .= "WHERE id =".$id;
	 	}
	 	echo "$sql";
		
			//
			if(mysqli_query($conn, $sql)){
				echo "Registro insertado correctamente";
			} else {
				echo "Registro no se ha insertado";
			}
	}
}
//Lee la tabla productos
if ($m=="S") {
	$sql = "SELECT * FROM productos WHERE tipo='0'";
	$r = mysqli_query($conn, $sql);
	$productos = array();
	while($row = mysqli_fetch_assoc($r)){
		array_push($productos, $row);
	}
}
//Lee la tabla productos
if ($m=="A" || $m=="C") {
	//Leyendo toda la tabla
	$sql = "SELECT id,nombre FROM productos WHERE tipo='0' ORDER BY nombre";
	$r = mysqli_query($conn, $sql);
	$productos = array();
	while($row = mysqli_fetch_assoc($r)){
		array_push($productos, $row);
	}
}
// Lee un producto
if ($m=="C") {
	$id = $_GET["id"];
	$sql = "SELECT * FROM productos WHERE id=".$id;
	$r = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($r);
	//Variable de trabajo
	$nombre=$data["nombre"];
	$descripcion=$data["descripcion"];
	$publico=$data["publico"];
	$objetivo=$data["objetivo"];
	$necesario=$data["necesario"];
	$precio=$data["precio"];
	$descuento=$data["descuento"];
	$envio=$data["envio"];
	$imagen=$data["imagen"];
	$fecha=$data["fecha"];
	$relacion1=$data["relacion1"];
	$relacion2=$data["relacion2"];
	$relacion3=$data["relacion3"];
	$vendido=$data["masvendido"];
	$nuevo=$data["nuevos"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Productos ABC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		window.onload = function() {
			document.getElementById("regresar").onclick = function(){
				window.open("productosABC.php","_self");
			}
			<?php if($m=="C"){ ?>
			document.getElementById("borrar").onclick = function(){
				if (confirm("Desea borrar el producto?\nUna ves borrado el registro No podra ser recuperado")) {
					var id = <?php echo $id; ?>;
					window.open("productosABC.php?m=B&id="+id,"_self");
				}
			}
			<?php } ?> 		}
	</script>
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
					<li><a href="../index.php">Inicio</a></li>
					<li><a href="../cursos.php">Cursos</a></li>
					<li><a href="../libros.php">Libros</a></li>
					<li><a href="../sobremi.php">Sobre Mi</a></li>
					<li class="active"><a href="../contacto.php">Contacto</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid text-center">
		<div class="row content">
			<div class="col-sm-2 sidenav">
				
			</div>
			<div class="col-sm-8 text-left">
				<div class="well" id="contenedor">
					<h2 class="text-center">ABC tabla productos </h2>
					<?php
						$errores = array();
						if($m=="A" || $m=="C"){
						if (count($errores)>0) {
							echo '<div class="alert alert-danger">';
							foreach ($errores as $key => $valor) {
								echo "<strong> * ".$errores."</strong>";
								}
								echo "</div>";
						}
				
					 ?>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
					<div class="form-group text-left">
						<label for="nombre"> Nombre:</label>
						<input type="text" name="nombre" id="nombre" class="form-control"  placeholder="Escriba su nombre" value="<?php echo $nombre; ?>">
					</div>
					<div class="form-group text-left">
						<label for="descripcion"> Descripcion:</label>
						<textarea class="form-control" name="descripcion" id="descripcion"><?php echo $descripcion; ?></textarea>
					</div>
					<div class="form-group text-left">
						<label for="publico"> A quien va dirigido:</label>
						<textarea class="form-control" name="publico" id="publico"><?php echo $publico; ?></textarea>
					</div>
					<div class="form-group text-left">
						<label for="objetivo"> Objetivo del curso:</label>
						<textarea class="form-control" name="objetivo" id="objetivo"><?php echo $objetivo; ?></textarea>
					</div>
					<div class="form-group text-left">
						<label for="necesario"> Que es necesario ante del curso:</label>
						<textarea class="form-control" name="necesario" id="necesario"><?php echo $necesario; ?></textarea>
					</div>
					<div class="form-group text-left">
						<label for="precio"> Precio:</label>
						<input type="text" name="precio" id="precio" class="form-control"  placeholder="Escriba el precio" pattern="^(\d|-)?(\d|,)*\.?\d*$" value="<?php echo $precio; ?>">
					</div>
					<div class="form-group text-left">
						<label for="descuento"> Descuento:</label>
						<input type="text" name="descuento" id="descuento" class="form-control" pattern="^(\d|-)?(\d|,)*\.?\d*$"  placeholder="Escriba su descuento" value="<?php echo $descuento; ?>">
					</div>
					<div class="form-group text-left">
						<label for="envio"> Envio:</label>
						<input type="text" name="envio" id="envio" class="form-control" pattern="^(\d|-)?(\d|,)*\.?\d*$"  placeholder="Costo de envio" value="<?php echo $envio; ?>">
					</div>
					<div class="form-group text-left">
						<label for="imagen">* Imagen:</label>
						<input type="file" name="imagen" id="imagen" accept="image/jpeg" />
						<?php
							if(isset($imagen)){
								print "<img src='../img/".$imagen."' width='150'/>";
								print "<p>".$imagen."</p>";
							}
						?>
					</div>
					<div class="form-group text-left">
						<label for="fecha"> Fecha:</label>
						<input type="date" name="fecha" id="fecha" class="form-control"  placeholder="Escriba su fecha" value="<?php echo $fecha; ?>">
					</div>
					<div class="form-group text-left">
						<label for="relacion1"> Relacion1:</label>
						<select id="relacion1" name="relacion1">
							<option value="0">-No hay cursos relacionados-</option>
							<?php
								for ($i=0; $i < count($productos) ; $i++) { 
									print "<option value='".$productos[$i]["id"]."'";
									if ($productos[$i]["id"]==$relacion1) print " selected ";
									print "/>".$productos[$i]["nombre"]."</option>";
								}
							?>
						</select>
					</div>
					<div class="form-group text-left">
						<label for="relacion2"> Relacion2:</label>
						<select id="relacion2" name="relacion2">
							<option value="0">-No hay cursos relacionados-</option>
							<?php
								for ($i=0; $i < count($productos) ; $i++) { 
									print "<option value='".$productos[$i]["id"]."'";
									if ($productos[$i]["id"]==$relacion2) print " selected ";
									print "/>".$productos[$i]["nombre"]."</option>";
								}
							?>
						</select>
					</div>
					<div class="form-group text-left">
						<label for="relacion3"> Relacion3:</label>
						<select id="relacion3" name="relacion3">
							<option value="0">-No hay cursos relacionados-</option>
							<?php
								for ($i=0; $i < count($productos) ; $i++) { 
									print "<option value='".$productos[$i]["id"]."'";
									if ($productos[$i]["id"]==$relacion3) print " selected ";
									print "/>".$productos[$i]["nombre"]."</option>";
								}
							?>
						</select>
					</div>
					<div class="form-group text-left">
						<label><input type="checkbox" name="vendido" id="vendido" 
						<?php if ($vendido=="1") print " checked "; ?> 
					  >Curso más vendido:</label>
					</div>
					<div class="form-group text-left">
						<label><input type="checkbox" name="nuevo" id="nuevo" 
						<?php if ($nuevo=="1") print " checked "; ?> 
					  >Nuevo producto:</label>
					</div>
					<input type="hidden" name="id" id="id" value="<?php print $id; ?>">
					<div class="form-group text-left">
						<label for="enviar"></label>
						<input type="submit" name="enviar" id="enviar" value="Enviar" class="btn btn-success" role="button">

						<label for="regresar"></label>
						<input type="button" name="regresar" id="regresar" value="Regresar" class="btn btn-info" role="button">
						<?php if($m=="C") { ?>
						<label for="borrar"></label>
						<input type="button" name="borrar" id="borrar" value="Borrar" class="btn btn-danger" role="button">
					<?php } ?>
					</div>
				</form>
			<?php }
				if ($m=="S") {
					$ren = 0;
					for ($i=0; $i < count($productos) ; $i++) { 
						if ($ren==0) {
							print '<div class="row">';
						}
						print '<div class="col-sm-3">';
						print '<img src="../img/'.$productos[$i]["imagen"].'" class="img-responsive img-rounded" style="width:100%" alt="'.$productos[$i]["nombre"].'">';
						print '<p><a href="productosABC.php?m=C&id='.$productos[$i]["id"].'">'.$productos[$i]["nombre"].'</a></p>';
						print '</div>';
						$ren++;
						if ($ren==4) {
							$ren = 0;
							print "</div>";
						}
					}
				}
			?>
			</div>
			</div>	
			<div class="col-sm-2 sidenav">
			
			</div>
		</div><br>
	</div>	<br><br>
		
</body>
</html>