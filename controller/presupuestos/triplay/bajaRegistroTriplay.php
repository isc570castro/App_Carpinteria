<?php
$idPresupuesto=$_REQUEST['idPresupuesto'];
$noRegistro=$_REQUEST['noRegistro'];
$tipoMadera=$_REQUEST['tipoMadera'];
include "../../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("DELETE FROM materiaPrima WHERE idPresupuesto=$idPresupuesto AND noRegistro=$noRegistro AND tipoMadera='$tipoMadera'", $link) or die(mysql_error());
$sqlSumaPies= mysql_query("SELECT SUM(cantPies) from materiaprima where idPresupuesto='$idPresupuesto' AND tipoMadera='$tipoMadera';", $link) or die(mysql_error());
$row = mysql_fetch_array($sqlSumaPies);
$totalpies=$row['SUM(cantPies)'];
if ($tipoMadera=='triplaySeis'){	
	$actualizaPresupuesto=mysql_query("UPDATE Presupuesto SET totalPiesTseis='$totalpies' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
	echo 	"<script type='text/javascript'>
	window.location='../../../dom/view/admin/presupuestos/triplay/calcularPiesTseis.php?idPresupuesto=$idPresupuesto'
</script>";
}else if($tipoMadera=='triplayTres'){
	$actualizaPresupuesto=mysql_query("UPDATE Presupuesto SET totalPiesTtres='$totalpies' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
	echo 	"<script type='text/javascript'>
	window.location='../../../dom/view/admin/presupuestos/triplay/calcularPiesTtres.php?idPresupuesto=$idPresupuesto'
</script>";
}else if($tipoMadera=='triplayMedia'){
	$actualizaPresupuesto=mysql_query("UPDATE Presupuesto SET totalPiesTunaymedia='$totalpies' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
	echo 	"<script type='text/javascript'>
	window.location='../../../dom/view/admin/presupuestos/triplay/calcularPiesTmedia.php?idPresupuesto=$idPresupuesto'
</script>";
}else if($tipoMadera=='triplayTresCuartos'){
	$actualizaPresupuesto=mysql_query("UPDATE Presupuesto SET totalPiesTtresCuartos='$totalpies' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
	echo 	"<script type='text/javascript'>
	window.location='../../../dom/view/admin/presupuestos/triplay/calcularPiesTtresCuartos.php?idPresupuesto=$idPresupuesto'
</script>";
}else if($tipoMadera=='triplayCincoOctavos'){
	$actualizaPresupuesto=mysql_query("UPDATE Presupuesto SET totalPiesTcincoOctavos='$totalpies' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
	echo 	"<script type='text/javascript'>
	window.location='../../../dom/view/admin/presupuestos/triplay/calcularPiesTcincoOctavos.php?idPresupuesto=$idPresupuesto'
</script>";
}
?>

