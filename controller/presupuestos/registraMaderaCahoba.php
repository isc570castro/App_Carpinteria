<?php
	$idPresupuesto=$_REQUEST['idPresupuesto'];
 	$cantidad=$_POST['cantidad'];
	$grueso=$_POST['grueso'];
	$ancho=$_POST['ancho'];
	$largo=$_POST['largo'];
	$cantPies=$_POST['cantPies'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sqlmaxRegistro= mysql_query("SELECT max(noRegistro) FROM materiaprima WHERE idPresupuesto=$idPresupuesto AND tipoMadera='Cahoba'", $link) or die(mysql_error());
$rows = mysql_fetch_array($sqlmaxRegistro);
$noRegistro=$rows['max(noRegistro)']+1;
$sql = mysql_query("INSERT INTO materiaPrima
		VALUES ($idPresupuesto,'$noRegistro','$cantidad','$grueso','$ancho','$largo','$cantPies','Cahoba')", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
}else{
	$sqlSumaPies= mysql_query("SELECT SUM(cantPies) from materiaprima where idPresupuesto='$idPresupuesto' AND tipoMadera='Cahoba';", $link) or die(mysql_error());
	$row = mysql_fetch_array($sqlSumaPies);
	$totalpies=$row['SUM(cantPies)'];
	$actualizaPresupuesto=mysql_query("UPDATE Presupuesto SET totalPiesCahoba='$totalpies' WHERE idPresupuesto=$idPresupuesto", $link) or die(mysql_error());
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Presupuestos/costoenMaderaCahoba.php?idPresupuesto=$idPresupuesto'
			</script>";
}
?>