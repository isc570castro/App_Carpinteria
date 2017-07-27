<?php
	$usuario=$_REQUEST['usuario'];
 	$password=$_REQUEST['password'];
 	$password2=$_REQUEST['password2'];
 	$mensaje = strtoupper($password2);
 	$tamano = strlen($mensaje);
 	$encriptada="";
for ($pos=0; $pos < $tamano ; $pos++) {
	$resultado1 = $mensaje[$pos];
	/*if ($resultado1 == "X") {
		$encriptada=$encriptada."A";
	}else{*/
		if ($resultado1 == "Y") {
			$encriptada=$encriptada."B";
		}else{
			if ($resultado1 == "Z") {
				$encriptada=$encriptada."C";
			}else{
				for ($i=40;$i<=90;$i++) {
					$letra = chr($i);
					if ($resultado1 == $letra) {
						$i = $i + 2;
						$resultado =chr($i);
						$encriptada=$encriptada.$resultado;
					}               
				}
			}
		}
	//}
}
include "../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("INSERT INTO usuario
		VALUES (null,'$usuario','$password','$encriptada')", $link) or die(mysql_error());
if (!$sql){
	die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos guardados');
			</script>";
	echo 	"<script type='text/javascript'>
			window.location='../../dom/view/sesion.php'
			</script>";
}
    mysql_close($link);

?>