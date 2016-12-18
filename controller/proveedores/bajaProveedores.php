<?php
	$idProveedor=$_GET['idProveedor'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("DELETE FROM Proveedores WHERE idProveedor='$idProveedor'", $link) ;
if (!$sql){
	die("<script type='text/javascript'>
			alert('No se pudieron eliminar los datos debido a que hay registros ligados con el proveedor');
			window.location='../../dom/view/admin/Proveedores/showProveedores.php'
			</script>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos eliminados correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Proveedores/showProveedores.php'
			</script>";
    mysql_close($link);
}
?>