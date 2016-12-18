<?php
	$folioVenta=$_REQUEST['folioVenta'];
	$montoAbono=$_POST['montoAbono'];
	$montoRestante1=$_POST['montoRestante'];
	$fechaAbono=$_POST['fechaAbono'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
 $sqlnoAbono= mysql_query("SELECT max(noAbono) FROM abonos WHERE folioVenta='$folioVenta='", $link) or die(mysql_error());
    $row= mysql_fetch_array($sqlnoAbono);
    $noAbono=$row['max(noAbono)']+1;

	if($montoAbono>$montoRestante1){
		echo 	"<script type='text/javascript'>
			alert('No se puede abonar un monto mayor al monto restante');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/ventas/abonos.php?folioVenta=$folioVenta;'
			</script>";
	}else{
	if($montoAbono>0){	
	$sql = mysql_query("INSERT INTO abonos
		VALUES ($noAbono,'$folioVenta','$fechaAbono','$montoAbono')", $link) or die(mysql_error());
	$montoRestante=$montoRestante1-$montoAbono;
	$sql = mysql_query("UPDATE ventacredito SET montoRestante='$montoRestante' WHERE folioVenta='$folioVenta'", $link) or die(mysql_error());
	if($montoRestante==0){
		$actualizaEstado = mysql_query("UPDATE ventacredito SET estado='Pagado' WHERE folioVenta='$folioVenta'", $link) or die(mysql_error());
	}
	echo 	"<script type='text/javascript'>
			alert('Se genero correctamente el abono');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/ventas/abonos.php?folioVenta=$folioVenta;'
			</script>";
	}else{
		echo 	"<script type='text/javascript'>
			alert('No se puede abonar un monto menor o igual a 0.00');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/ventas/abonos.php?folioVenta=$folioVenta;'
			</script>";
	}
	}
  mysql_close($link);
?>