<?php
$idPresupuesto=$_REQUEST['idPresupuesto'];
$descripcion=$_POST['descripcion'];
$detalles=$_POST['detalles'];
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
include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("UPDATE Presupuesto set descripcion='$descripcion', detalles='$detalles', montoTotal='$montoTotal', idCliente='$idCliente', montoTotalMadera='$montoTotalMadera', montoTotalProductos='$montoTotalProductos',precioPie='$precioPiePino', totalPies='$totalPiesPino',precioPieBanak='$precioPieBanak', totalPiesBanak='$totalPiesBanak', precioPieCahoba='$precioPieCahoba', totalPiesCahoba='$totalPiesCahoba',montoTotalPino='$montoTotalPino',montoTotalCahoba='$montoTotalCahoba', montoTotalBanak='$montoTotalBanak' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la actualización de datos: ".mysql_error()."</p>");
}else{
	echo 	"<script type='text/javascript'>
	alert('Datos actualizados correctamente');
</script>";
echo 	"<script type='text/javascript'>
window.location='../../dom/view/admin/Presupuestos/detallesPresupuesto.php?idPresupuesto=$idPresupuesto'
</script>";
}
mysql_close($link);
?>