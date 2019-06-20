<?php
/*

Creacion de nuevos usuarios, 


*/
include("../db.php");
session_start(); 
$conn =  mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_NAME);

mysqli_query($conn, "SET CHARACTER SET utf8");
mysqli_query($conn, "SET NAMES utf8");

$usuario = $_GET['email'];
$clave = $_GET['password'];

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

$sql="insert into usu_usuarios (usu_email, usu_password, usu_nombre, usu_apellido) values ('".$usuario."','".$clave."','".$nombre."','".$apellido."')";

	
$ejecutar_sql=mysqli_query($conn,$sql);	
	




	
header('Location: ../index.php');	



	
?>