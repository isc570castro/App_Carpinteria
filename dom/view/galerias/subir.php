<?php
session_start();
$seguridad = $_SESSION['seguridad'];
if (!isset($seguridad)){
echo  "<script type='text/javascript'>
    alert('Debes loguearte para poder ingresar al catálogo');
    </script>";
header ('Location:../../../index.html');
}
$categoria=$_POST['categoria'];
include ('../../../model/conexion.php');
$objConex = new Conexion();
$link=$objConex->conectarse();
    $nombre = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
    $ruta = "imagenes/" . $_FILES['imagen']['name'];
  $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
if($resultado){
$sql = @mysql_query("INSERT INTO catalogo VALUES (null,'$categoria','$nombre')", $link);	
if (!$sql){
	die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
	mysql_close($link);
}else{
	echo 	"<script type='text/javascript'>
			alert('Datos guardados');
			</script>";
}}	
else {
	echo 	"<script type='text/javascript'>
			alert('Datos guardados');
			</script>";

}
echo 	"<script type='text/javascript'>
			window.location='subirFoto.php'
			</script>";
mysql_close($link);
?>
						
