<?php
/*
Libreria para carga de libros disponibles en la biblioteca, solo en caso de contar con la variable lib_usu_id =0 el libro esta disponinble, al reservarse esta variable toma el ID del usuario



*/
session_start();
include("../db.php");
$conn =  mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_NAME);

mysqli_query($conn, "SET CHARACTER SET utf8");
mysqli_query($conn, "SET NAMES utf8");

if($conn){
	$sql = "select lib_id,lib_nombre,lib_review,lib_autor,lib_editorial from lib_libros where lib_usu_id=0";
	$query = $conn->query($sql);
	$data = array();
	while($r = $query->fetch_assoc()){
		$data[] = $r;
	}
	echo json_encode(array("libros1"=>$data));
}

?>