<?php
//Iniciamos sessiono
session_start();
//Si existe la variable usuario
if(isset($_SESSION['usuario'])){
	//Pasamos lo valores a variable de trabajo
	$nombre= $_SESSION['usuario']['nombre'];
	$apellidoparterno= $_SESSION['usuario']['apellidopaterno'];
	$apellidomaterno= $_SESSION['usuario']['apellidomaterno'];
}
?>