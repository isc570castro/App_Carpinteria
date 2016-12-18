<?php
	$descripcion=$_POST['descripcion'];
 	$precio=$_POST['precio'];
	$marca=$_POST['marca'];
	$nombreProveedor=$_POST['nombreProveedor'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sacaidProveedor=mysql_query("SELECT idProveedor FROM proveedores WHERE nombreProveedor='$nombreProveedor'", $link);
$rows = mysql_fetch_array($sacaidProveedor); 
$idProveedor=$rows['idProveedor']; 
$sql = mysql_query("INSERT INTO Productos
		VALUES (null,'$descripcion','$precio','$marca','$idProveedor')", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos guardados');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Productos/showProductos.php'
			</script>";
    mysql_close($link);
}
?>