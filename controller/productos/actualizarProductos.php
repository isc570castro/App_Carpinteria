<?php
	$idProducto=$_REQUEST['idProducto'];
	$descripcion=$_POST['descripcion'];
 	$precio=$_POST['precio'];
	$marca=$_POST['marca'];
	$idProveedor=$_POST['idProveedor'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("UPDATE Productos set descripcion='$descripcion', precio='$precio', marca='$marca', idProveedor='$idProveedor' where idProducto='$idProducto';", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la actualización de datos: ".mysql_error()."</p>");
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos actualizados correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Productos/showProductos.php'
			</script>";
}
mysql_close($link);
?>