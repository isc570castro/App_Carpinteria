<?php
	$idPresupuesto=$_REQUEST['idPresupuesto'];
	$noRegistro=$_GET['noRegistro'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sqltotalPies = mysql_query("SELECT totalPiesCahoba FROM presupuesto WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
$row=mysql_fetch_array($sqltotalPies);
$totalPies=$row['totalPies'];
$sqlcantPies = mysql_query("SELECT cantPies FROM materiaprima WHERE idPresupuesto='$idPresupuesto' and noRegistro='$noRegistro' and tipoMadera='Cahoba'", $link) or die(mysql_error());
$row2=mysql_fetch_array($sqlcantPies);
$cantPies=$row2['cantPies'];
$totalPies2=$totalPies-$cantPies;
	$sql3 = mysql_query("UPDATE presupuesto SET totalPiesCahoba='$totalPies2' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());  
	$sql2 = mysql_query("DELETE FROM materiaprima WHERE idPresupuesto='$idPresupuesto' and noRegistro='$noRegistro' and tipoMadera='Cahoba'", $link) or die(mysql_error());

	echo 	"<script type='text/javascript'>
			alert('Datos eliminados correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/presupuestos/costoenMaderaCahoba.php?idPresupuesto=$idPresupuesto';
			</script>";

 mysql_close($link);
?>