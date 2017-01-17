<?php
	$idPresupuesto=$_GET['idPresupuesto'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("DELETE FROM presupuesto WHERE idPresupuesto='$idPresupuesto'", $link);
if (!$sql){
	die("<script type='text/javascript'>
			alert('No se pudieron eliminar los datos debido a que hay registros ligados con el presupuesto');
			window.location='../../dom/view/admin/Presupuestos/showPresupuestos.php'
			</script>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos eliminados correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Presupuestos/showPresupuestos.php'
			</script>";
    mysql_close($link);
}
?>