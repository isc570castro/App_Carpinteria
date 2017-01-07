<?php
	$descripcion=$_POST['descripcion'];
 	$detalles=$_POST['detalles'];
	$nombreCliente=$_POST['nombreCliente'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sacaidCliente= mysql_query("SELECT idCliente FROM clientes WHERE nombreCliente='$nombreCliente'", $link);
$rows = mysql_fetch_array($sacaidCliente); 
$idCliente=$rows['idCliente']; 
$sql = mysql_query("INSERT INTO Presupuesto
		VALUES (null,'$descripcion','$detalles','$idCliente','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00')", $link) or die(mysql_error());
/*$query = mysql_query("SELECT idPresupuesto FROM presupuesto", $link) or die(mysql_error());
$rows2 = mysql_fetch_array($query);
$idPresupuesto=$rows2['idPresupuesto'];
$sql1 = mysql_query("INSERT INTO materiales
		VALUES ('$idPresupuesto','','0.00',null)", $link) or die(mysql_error());
$sql2 = mysql_query("INSERT INTO materiaPrima
     	VALUES ('$idPresupuesto','','0','0','0','0','0','0.00','0.00','0.00')", $link) or die(mysql_error());
mysql_close($link);*/
if (!$sql){
	die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos guardados');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Presupuestos/showPresupuestos.php'
			</script>";  
}
?>