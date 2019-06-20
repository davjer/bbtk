<?php
session_start(); 
include("../db.php");
$conn =  mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_NAME);

mysqli_query($conn, "SET CHARACTER SET utf8");
mysqli_query($conn, "SET NAMES utf8");

if($conn){
	$sql = "select lib_id,lib_nombre,lib_review,lib_autor,lib_editorial from lib_libros where lib_usu_id=".$_SESSION['usu_id'];
	$query = $conn->query($sql);
	$data = array();
	while($r = $query->fetch_assoc()){
		$data[] = $r;
	}
	echo json_encode(array("libros2"=>$data));
}

?>