<?php
	$idCliente=$_REQUEST['idCliente'];
	$nombreCliente=$_POST['nombreCliente'];
 	$domicilio=$_POST['domicilio'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("UPDATE clientes set nombreCliente='$nombreCliente', domicilio='$domicilio', telefono='$telefono', correo='$correo' WHERE idCliente='$idCliente'", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la actualización de datos: ".mysql_error()."</p>");
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos actualizados correctamente');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/admin/Clientes/showClientes.php'
			</script>";
}
mysql_close($link);
?>