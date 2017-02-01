<?php
	$idPresupuesto=$_REQUEST['idPresupuesto'];
	$cantidad=$_POST['cantidad'];
	$idProducto=$_POST['idProducto'];
	$montoTotal=$_POST['montoTotal'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sqlmaxRegistro= mysql_query("SELECT max(noRegistro) FROM materiales WHERE idPresupuesto=$idPresupuesto", $link) or die(mysql_error());
$rows = mysql_fetch_array($sqlmaxRegistro);
$noRegistro=$rows['max(noRegistro)']+1;
$sql = mysql_query("INSERT INTO materiales
		VALUES ($noRegistro,$idPresupuesto,'$cantidad','$idProducto','$montoTotal')", $link) or die(mysql_error());
	$sqlSumaPrecios= mysql_query("select SUM(montoTotal) from materiales where idPresupuesto='$idPresupuesto';", $link) or die(mysql_error());
	$rows = mysql_fetch_array($sqlSumaPrecios);
	$montoTotalMateriales=$rows['SUM(montoTotal)'];
	$sqlMontoTotal= mysql_query("SELECT montoTotal FROM Presupuesto Where idPresupuesto='$idPresupuesto';", $link) or die(mysql_error());
	$rows = mysql_fetch_array($sqlMontoTotal);
	$montoTotalPresupuesto=$rows['montoTotal'];
	$montoTotal=$montoTotalPresupuesto+$montoTotalMateriales;
	$sql = mysql_query("UPDATE Presupuesto SET montoTotalProductos='$montoTotalMateriales', montoTotal=$montoTotal WHERE idPresupuesto=$idPresupuesto", $link) or die(mysql_error());
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Presupuestos/costoenProductos.php?idPresupuesto=$idPresupuesto'
			</script>";  
?>