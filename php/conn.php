<?php
// Datos de conexion
$server="localhost";
$user="root";
$pass="";
$db="ecommerce";

$conn=new mysqli($server,$user,$pass,$db);

$conn->set_charset("utf8");

if($conn->connect_errno){

	echo "error en la conexion " . $conn->connect_errno;
}

if($conn->errno){

	die($conn->error);
}


?>