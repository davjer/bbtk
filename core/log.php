<?php
/*
se valida e ingresa el usuario, si el usuario existe se crean 3 variables de sesion las cuales ayudaran a las gestiones del programa y a su ves se usara como validacion sencilla de seguridad.


*/
include("../db.php");
session_start(); 
$conn =  mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_NAME);

mysqli_query($conn, "SET CHARACTER SET utf8");
mysqli_query($conn, "SET NAMES utf8");

$usuario = $_GET['email'];
$clave = $_GET['password'];

$sql="select * from usu_usuarios where usu_email='".limpiarCadena($usuario)."' and usu_password='".limpiarCadena($clave)."'";

	
$ejecutar_sql=mysqli_query($conn,$sql);	
	
if($row=@mysqli_fetch_array($ejecutar_sql))
{
	
       
		$_SESSION['usu_id']=$row["usu_id"];
		$_SESSION['nombre']=$row["usu_nombre"]." ".$row["usu_apellido"];	
		$_SESSION['fingerprint'] = md5($_SERVER['HTTP_USER_AGENT']);
	
	if(!isset($_SESSION)){
	
	ini_set("session.cookie_lifetime","72000");
    ini_set("session.gc_maxlifetime","72000");
		
		 session_start(); 
	}	
	
	
	

header('Location: ../dashboard.php');	


}else{
	
header('Location: ../index.php');	
}


	
function limpiarCadena($valor)
{
	$valor = str_ireplace("SELECT","",$valor);
	$valor = str_ireplace("COPY","",$valor);
	$valor = str_ireplace("DELETE","",$valor);
	$valor = str_ireplace("DROP","",$valor);
	$valor = str_ireplace("DUMP","",$valor);
	$valor = str_ireplace(" OR ","",$valor);
	$valor = str_ireplace("%","",$valor);
	$valor = str_ireplace("LIKE","",$valor);
	$valor = str_ireplace("--","",$valor);
	$valor = str_ireplace("^","",$valor);
	$valor = str_ireplace("[","",$valor);
	$valor = str_ireplace("]","",$valor);
	$valor = str_ireplace("\\","",$valor);
	$valor = str_ireplace("!","",$valor);
	$valor = str_ireplace("¡","",$valor);
	$valor = str_ireplace("?","",$valor);
	$valor = str_ireplace("=","",$valor);
	//$valor = str_ireplace("&","",$valor);
	return $valor;
}	
	
?>