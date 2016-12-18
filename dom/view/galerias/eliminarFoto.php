<?php
	$idCatalogo=$_REQUEST['idCatalogo'];
	$ubicacion=$_GET['ubicacion'];
	include "../../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("DELETE from catalogo  WHERE idCatalogo='$idCatalogo'", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la eliminación de datos: ".mysql_error()."</p>");
}else{
	if ($ubicacion=='buros'){
		echo 	"<script type='text/javascript'>
				window.location='buros.php';
				</script>";
	}else if ($ubicacion=='camas'){
		echo 	"<script type='text/javascript'>
				window.location='camas.php';
				</script>";
	}else if ($ubicacion=='closets'){
		echo 	"<script type='text/javascript'>
				window.location='closets.php';
				</script>";
	}else if ($ubicacion=='cocinas'){
		echo 	"<script type='text/javascript'>
				window.location='cocinas.php';
				</script>";
	}else if ($ubicacion=='escritorios'){
		echo 	"<script type='text/javascript'>
				window.location='escritorios.php';
				</script>";
	}else if ($ubicacion=='marcos'){
		echo 	"<script type='text/javascript'>
				window.location='marcos.php';
				</script>";
	}else if ($ubicacion=='mesas'){
		echo 	"<script type='text/javascript'>
				window.location='mesas.php';
				</script>";
	}else if ($ubicacion=='otros'){
		echo 	"<script type='text/javascript'>
				window.location='otros.php';
				</script>";
	}else if ($ubicacion=='puertas'){
		echo 	"<script type='text/javascript'>
				window.location='puertas.php';
				</script>";
	}
}
mysql_close($link);
?>