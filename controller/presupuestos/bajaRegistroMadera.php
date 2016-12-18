<?php
	$idPresupuesto=$_REQUEST['idPresupuesto'];
	$noRegistro=$_GET['noRegistro'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("DELETE FROM materiaprima WHERE idPresupuesto='$idPresupuesto' and noRegistro='$noRegistro'", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la eliminación de datos".mysql_error()."</p>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Presupuestos/costoenMadera.php?idPresupuesto=$idPresupuesto';
			</script>";
    mysql_close($link);
}
?>