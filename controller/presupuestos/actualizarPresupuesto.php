<?php
$idPresupuesto=$_REQUEST['idPresupuesto'];
$descripcion=$_POST['descripcion'];
$detalles=$_POST['detallesPresupuesto'];
$montoTotal=$_POST['montoTotal'];
$idCliente=$_POST['idCliente'];
$montoTotalMadera=$_POST['totalMadera'];
$montoTotalProductos=$_POST['montoTotalProductos'];
$precioPiePino=$_POST['precioPiePino'];
$totalPiesPino=$_POST['totalPiesPino'];
$precioPieBanak=$_POST['precioPieBanak'];
$totalPiesBanak=$_POST['totalPiesBanak'];
$precioPieCahoba=$_POST['precioPieCahoba'];
$totalPiesCahoba=$_POST['totalPiesCahoba'];
$montoTotalPino=$_POST['precioPino'];
$montoTotalCahoba=$_POST['precioCahoba'];
$montoTotalBanak=$_POST['precioBanak'];
$precioPieTunaymedia=$_POST['precioPieTunaymedia'];
$totalPiesTunaymedia=$_POST['totalPiesTunaymedia'];
$precioPieTcincoOctavos=$_POST['precioPieTcincoOctavos'];
$totalPiesTcincoOctavos=$_POST['totalPiesTcincoOctavos'];
$precioPieTtresCuartos=$_POST['precioPieTtresCuartos'];
$totalPiesTtresCuartos=$_POST['totalPiesTtresCuartos'];
$montoTotalTunaymedia=$_POST['montoTotalTunaymedia'];
$montoTotalTcincoOctavos=$_POST['montoTotalTcincoOctavos'];
$montoTotalTtresCuartos=$_POST['montoTotalTtresCuartos'];
$precioPieTtres=$_POST['precioPieTtres'];
$totalPiesTtres=$_POST['totalPiesTtres'];
$precioPieTseis=$_POST['precioPieTseis'];
$totalPiesTseis=$_POST['totalPiesTseis'];
$montoTotalTtres=$_POST['montoTotalTtres'];
$montoTotalTseis=$_POST['montoTotalTseis'];
$totalTriplay=$_POST['totalTriplay'];
$manoObra=$_POST['manoObra'];
$pintura=$_POST['totalPintura'];
include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("UPDATE Presupuesto set descripcion='$descripcion', detalles='$detalles', montoTotal='$montoTotal', idCliente='$idCliente', montoTotalMadera='$montoTotalMadera', montoTotalProductos='$montoTotalProductos',precioPie='$precioPiePino', totalPies='$totalPiesPino',precioPieBanak='$precioPieBanak', totalPiesBanak='$totalPiesBanak', precioPieCahoba='$precioPieCahoba', totalPiesCahoba='$totalPiesCahoba',montoTotalPino='$montoTotalPino',montoTotalCahoba='$montoTotalCahoba', montoTotalBanak='$montoTotalBanak',  totalPiesTunaymedia='$totalPiesTunaymedia', precioPieTunaymedia='$precioPieTunaymedia', precioPieTcincoOctavos='$precioPieTcincoOctavos', totalPiesTcincoOctavos='$totalPiesTcincoOctavos', precioPieTtresCuartos='$precioPieTtresCuartos', totalPiesTtresCuartos='$totalPiesTtresCuartos', montoTotalTunaymedia='$montoTotalTunaymedia', montoTotalTcincoOctavos='$montoTotalTcincoOctavos', montoTotalTtresCuartos='$montoTotalTtresCuartos', precioPieTtres='$precioPieTtres', totalPiesTtres='$totalPiesTtres', precioPieTseis='$precioPieTseis', totalPiesTseis='$totalPiesTseis', montoTotalTtres='$montoTotalTtres', montoTotalTseis='$montoTotalTseis', totalTriplay='$totalTriplay', manoObra='$manoObra', pintura='$pintura' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la actualización de datos: ".mysql_error()."</p>");
}else{
	echo 	"<script type='text/javascript'>
	alert('Datos actualizados correctamente');
</script>";
echo  "<script type='text/javascript'>
window.location='../../dom/view/admin/Presupuestos/detallesPresupuesto.php?idPresupuesto=$idPresupuesto'
</script>";
}
mysql_close($link);
?>