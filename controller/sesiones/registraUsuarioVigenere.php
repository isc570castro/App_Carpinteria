<?php
	$usuario=$_REQUEST['usuario'];
 	$password=$_REQUEST['password'];
 	$password2=$_REQUEST['password2'];
 	$mensaje = strtoupper($password2);
 	$tamano = strlen($mensaje);
 	include ('Vigenere.php');
$semilla = "ENCRIPTACION";
$encriptada = "";

//Vigenere
//CIFRADO DEL MENSAJE
$cipher    = new Vigenere($mensaje, $semilla);
$encriptada = $cipher->encode();

$cipher2    = new Vigenere($encriptada, $semilla);
$desencriptada = $cipher2->decode(); 

include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("INSERT INTO usuario
		VALUES (null,'$usuario','$desencriptada','$encriptada')", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			alert('La palabra encriptada =".$encriptada."');
			alert('La palabra desencriptada =".$desencriptada."');
			</script>";
	echo 	"<script type='text/javascript'>
			alert('Datos guardados');
			</script>";
	/*echo 	"<script type='text/javascript'>
			window.location='../../dom/view/sesion.php'
			</script>";*/
}
    mysql_close($link);

?>