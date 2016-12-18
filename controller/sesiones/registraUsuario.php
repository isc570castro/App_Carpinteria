<?php
	$nombre=$_REQUEST['nombreUsuario'];
	$usuario=$_REQUEST['usuario'];
 	$password=$_REQUEST['password'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$verificaUsuario = mysql_query("SELECT usuario FROM usuario WHERE usuario='$usuario';" , $link) or die(mysql_error());
	$row=mysql_num_rows($verificaUsuario);
	if ($row == 0){
$sql = mysql_query("INSERT INTO usuario
		VALUES (null,'$nombre','$usuario','$password')", $link) or die(mysql_error());
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
}else{
	echo 	"<script type='text/javascript'>
				alert('El usuario ".$usuario." ya existe, por favor intenta con otro');
				</script>";
	echo 	"<script type='text/javascript'>
				window.location='../../dom/view/registro2.php?nombre=$nombre&password=$password';
				</script>";
}

?>