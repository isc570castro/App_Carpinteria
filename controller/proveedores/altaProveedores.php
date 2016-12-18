<?php
	$nombreProveedor=$_POST['nombreProveedor'];
 	$domicilio=$_POST['domicilio'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("INSERT INTO proveedores
		VALUES (null,'$nombreProveedor','$domicilio','$telefono','$correo')", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos guardados');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Proveedores/showProveedores.php'
			</script>";
    mysql_close($link);
}
?>