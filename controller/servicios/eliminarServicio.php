<?php
	$idServicio=$_REQUEST['idServicio'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("DELETE from servicios  WHERE idServicio='$idServicio'", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la eliminación de datos: ".mysql_error()."</p>");
}else{
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/servicios/showServicios.php'
			</script>";
}
mysql_close($link);
?>