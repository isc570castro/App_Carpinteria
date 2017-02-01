<?php
	$idPresupuesto=$_REQUEST['idPresupuesto'];
 	$cantidad=$_POST['cantidad'];
	$ancho=$_POST['ancho'];
	$largo=$_POST['largo'];
	$cantPies=$_POST['cantPies'];
	include "../../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sqlmaxRegistro= mysql_query("SELECT max(noRegistro) FROM materiaprima WHERE idPresupuesto=$idPresupuesto AND tipoMadera='triplayMedia'", $link) or die(mysql_error());
$rows = mysql_fetch_array($sqlmaxRegistro);
$noRegistro=$rows['max(noRegistro)']+1;
$sql = mysql_query("INSERT INTO materiaPrima
		VALUES ($idPresupuesto,'$noRegistro','$cantidad','3','$ancho','$largo','$cantPies','triplayMedia')", $link) or die(mysql_error());
	$sqlSumaPies= mysql_query("SELECT SUM(cantPies) from materiaprima where idPresupuesto='$idPresupuesto' AND tipoMadera='triplayMedia';", $link) or die(mysql_error());
	$row = mysql_fetch_array($sqlSumaPies);
	$totalpies=$row['SUM(cantPies)'];
	$actualizaPresupuesto=mysql_query("UPDATE Presupuesto SET totalPiesTunaymedia='$totalpies' WHERE idPresupuesto='$idPresupuesto'", $link) or die(mysql_error());
	echo 	"<script type='text/javascript'>
			window.location='../../../dom/view/admin/presupuestos/triplay/calcularPiesTmedia.php?idPresupuesto=$idPresupuesto'
			</script>";
?>