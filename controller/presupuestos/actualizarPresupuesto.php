<?php
	$nombrePresupuesto=$_POST['nombrePresupuesto'];
 	$descripcion=$_POST['descripcion'];
	$montoTotal=$_POST['montoTotal'];
	$nombreCliente=$_POST['nombreCliente'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$idCliente=("SELECT idCliente FROM clientes WHERE nombreCliente='$nombreCliente'");
$sql = mysql_query("INSERT INTO Presupuesto
		VALUES (null,'$nombrePresupuesto','$descripcion','$montoTotal','$idCliente')", $link) or die(mysql_error());


$sql = mysql_query("UPDATE Presupuesto set nombrePresupuesto='$nombrePresupuesto',descripcion='$descripcion',idCliente='$idCliente'", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la actualización de datos: ".mysql_error()."</p>");
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos actualizados correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Presupuesto/showPresupuesto.php'
			</script>";
}
mysql_close($link);
?>