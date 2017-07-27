<?php
	$usuario=$_REQUEST['usuario'];
 	$password=$_REQUEST['password'];
 	$password2=$_REQUEST['password2'];
 	$pass_encriptada1 = md5 ($password2); //Encriptacion nivel 1
 	$pass_encriptada2 = crc32($pass_encriptada1); //Encriptacion nivel 1
$pass_encriptada3 = crypt($pass_encriptada2, "xtemp"); //Encriptacion nivel 2
$pass_encriptada4 = sha1("xtemp".$pass_encriptada3); //Encriptacion nivel 3
	include "../../model/conexion.php";
	include ('Vigenere.php');
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("INSERT INTO usuario
		VALUES (null,'$usuario','$password','$pass_encriptada4')", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos guardados');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/sesion.php'
			</script>";
}
    mysql_close($link);

?>