<?php
/*
se retorna una libro a la biblioteca, para ello, se actualiza la variable lib_usu_id a 0 
*/
session_start();
include("../db.php");
$conn =  mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_NAME);

mysqli_query($conn, "SET CHARACTER SET utf8");
mysqli_query($conn, "SET NAMES utf8");


$lib_id=$_POST['lib_id'];

	$sql = "update lib_libros set lib_usu_id=0 where lib_id=".$lib_id;
 mysqli_query($conn,$sql) or die(mysqli_error($conn));

?>