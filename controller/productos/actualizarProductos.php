<?php
	$idProducto=$_REQUEST['idProducto'];
	$tipo=$_POST['tipo'];
	$descripcion=$_POST['descripcion'];
 	$precio=$_POST['precio'];
	$marca=$_POST['marca'];
	$idProveedor=$_POST['idProveedor'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("UPDATE productos set descripcion='$descripcion', tipo='$tipo', precio='$precio', marca='$marca', idProveedor='$idProveedor' where idProducto='$idProducto';", $link);
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