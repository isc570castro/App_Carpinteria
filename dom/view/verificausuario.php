<?php
	$usuario = $_POST['usuario'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$verificaUsuario = mysql_query("SELECT usuario FROM usuario WHERE usuario='$usuario';" , $link) or die(mysql_error());
	$row=mysql_num_rows($verificaUsuario);
	if ($row > 0){
	$mensaje=1;
	}else{
	$mensaje=0;
	}
	echo $mensaje;
?>

