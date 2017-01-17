<?php
 	$idPresupuesto=$_REQUEST['idPresupuesto'];
	$montoTotal=$_POST['montoTotal'];
	$fecha=$_POST['fecha'];
	$idCliente=$_POST['idCliente'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sqlmaxFolio= mysql_query("select max(FolioVenta) from ventaCredito", $link) or die(mysql_error());
$row= mysql_fetch_array($sqlmaxFolio);
$folio=$row['max(FolioVenta)']+1;
$sql = mysql_query("INSERT INTO ventacredito
		VALUES ('$folio','$fecha','$idPresupuesto','$montoTotal','$idCliente','Pendiente','$montoTotal')", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
}else{
	echo 	"<script type='text/javascript'>
			alert('Venta generada correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/ventas/showVentas.php'
			</script>";
}
  mysql_close($link);
?>