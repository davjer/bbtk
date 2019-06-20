<?php
/*
se realiza la reserva de un libro, en la tabla lib_libros se actualiza el campo lib_usu_id con el id del usuario

*/
session_start();
include("../db.php");
$conn =  mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_NAME);

mysqli_query($conn, "SET CHARACTER SET utf8");
mysqli_query($conn, "SET NAMES utf8");


$lib_id=$_POST['lib_id'];

	$sql = "update lib_libros set lib_usu_id=".$_SESSION['usu_id']." where lib_id=".$lib_id;
	
	echo $sql;
	
 mysqli_query($conn,$sql) or die(mysqli_error($conn));

?>