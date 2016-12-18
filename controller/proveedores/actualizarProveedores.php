<?php
	$idProveedor=$_GET['idProveedor'];
	$nombreProveedor=$_POST['nombreProveedor'];
 	$domicilio=$_POST['domicilio'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("UPDATE Proveedores set nombreProveedor='$nombreProveedor', domicilio='$domicilio', telefono='$telefono', correo='$correo' WHERE idProveedor='$idProveedor'", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la actualización de datos: ".mysql_error()."</p>");
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos actualizados correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Proveedores/showProveedores.php'
			</script>";
}
mysql_close($link);
?>