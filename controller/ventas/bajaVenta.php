<?php
	$folio=$_GET['folio'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("DELETE FROM ventaCredito WHERE folioVenta='$folio'", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la eliminación de datos".mysql_error()."</p>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos eliminados correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/ventas/showVentas.php'
			</script>";
}
mysql_close($link);
?>