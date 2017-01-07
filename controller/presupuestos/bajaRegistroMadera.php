<?php
	$idPresupuesto=$_REQUEST['idPresupuesto'];
	$noRegistro=$_GET['noRegistro'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
/*
$sqlmontoTotalRegistro = mysql_query("SELECT montoTotal FROM materiaprima WHERE idPresupuesto='$idPresupuesto' and noRegistro='$noRegistro'", $link) or die(mysql_error());
$row=mysql_fetch_array($sqlmontoTotalRegistro);
$montoTotalRegistro=$row['montoTotal'];

$sqlmontoTotalPresupuesto = mysql_query("SELECT montoTotal, montoTotalMadera FROM presupuesto WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());

$row2=mysql_fetch_array($sqlmontoTotalPresupuesto);
$montoTotalPresupuesto=$row2['montoTotal'];
$totalPresupuestoDisminuido=$montoTotalPresupuesto-$montoTotalRegistro;
	$sql = mysql_query("UPDATE presupuesto SET montoTotal='$totalPresupuestoDisminuido' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
	
$montoTotalMadera=$row2['montoTotalMadera'];
$totalPresupuestoMaderaDisminuido=$montoTotalMadera-$montoTotalRegistro;
	$sql = mysql_query("UPDATE presupuesto SET montoTotalMadera='$totalPresupuestoMaderaDisminuido' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());   
	*/   
$sqltotalPies = mysql_query("SELECT totalPies FROM presupuesto WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
$row=mysql_fetch_array($sqltotalPies);
$totalPies=$row['totalPies'];
$sqlcantPies = mysql_query("SELECT cantPies FROM materiaprima WHERE idPresupuesto='$idPresupuesto' and noRegistro='$noRegistro'", $link) or die(mysql_error());
$row2=mysql_fetch_array($sqlcantPies);
$cantPies=$row2['cantPies'];
$totalPies2=$totalPies-$cantPies;
	$sql3 = mysql_query("UPDATE presupuesto SET totalPies='$totalPies2' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());  
	$sql2 = mysql_query("DELETE FROM materiaprima WHERE idPresupuesto='$idPresupuesto' and noRegistro='$noRegistro'", $link) or die(mysql_error());

	echo 	"<script type='text/javascript'>
			alert('Datos eliminados correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/presupuestos/costoenMadera.php?idPresupuesto=$idPresupuesto';
			</script>";

 mysql_close($link);
?>