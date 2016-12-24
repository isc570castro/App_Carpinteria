<?php
	$idPresupuesto=$_REQUEST['idPresupuesto'];
	$noRegistro=$_GET['noRegistro'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sqlmontoTotalRegistro = mysql_query("SELECT montoTotal FROM materiales WHERE idPresupuesto='$idPresupuesto' and noRegistro='$noRegistro'", $link) or die(mysql_error());
$row=mysql_fetch_array($sqlmontoTotalRegistro);
$montoTotalRegistro=$row['montoTotal'];

$sqlmontoTotalPresupuesto = mysql_query("SELECT montoTotal, montoTotalProductos FROM presupuesto WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());

$row2=mysql_fetch_array($sqlmontoTotalPresupuesto);
$montoTotalPresupuesto=$row2['montoTotal'];
$totalPresupuestoDisminuido=$montoTotalPresupuesto-$montoTotalRegistro;
	$sql = mysql_query("UPDATE presupuesto SET montoTotal='$totalPresupuestoDisminuido' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
	
$montoTotalProductos=$row2['montoTotalProductos'];
$totalPresupuestoMaderaDisminuido=$montoTotalProductos-$montoTotalRegistro;
	$sql = mysql_query("UPDATE presupuesto SET montoTotalProductos='$totalPresupuestoMaderaDisminuido' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());   
	   
	$sql2 = mysql_query("DELETE FROM materiales WHERE idPresupuesto='$idPresupuesto' and noRegistro='$noRegistro'", $link) or die(mysql_error());

	echo 	"<script type='text/javascript'>
			alert('Datos eliminados correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/presupuestos/costoenProductos.php?idPresupuesto=$idPresupuesto';
			</script>";

 mysql_close($link);
?>