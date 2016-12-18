<?php
	$idProducto=$_GET['idProducto'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("DELETE FROM productos WHERE idProducto='$idProducto'", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la eliminación de datos".mysql_error()."</p>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos eliminados correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Productos/showProductos.php'
			</script>";
    mysql_close($link);
}
?>