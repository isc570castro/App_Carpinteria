<?php
	session_start();
	$usuario = $_SESSION['login'];
	$mensaje=$_POST['mensaje'];
	include "../../model/conexion.php";
	$objConex = new Conexion();
	$link=$objConex->conectarse();
	$sql = mysql_query("INSERT INTO servicios
		VALUES (null,'$usuario','$mensaje','Pendiente')", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			alert('Mensaje enviado satisfactoriamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../inicio.php'
			</script>";
    mysql_close($link);
}
?>