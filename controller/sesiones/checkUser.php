<?php
	$user=$_POST['usuario'];
	$password=$_POST['password'];
	include "../../model/conexion.php";
	$objConex = new Conexion();
	$link=$objConex->conectarse();
	session_start();
	$sql = mysql_query("SELECT usuario, password FROM usuario WHERE usuario='" .$user. "'
					   AND password='".$password."';" , $link) or die(mysql_error());
	$row=mysql_num_rows($sql);
	if ($row == 0){
			echo 	"<script type='text/javascript'>
					alert('Acceso incorrecto');
					</script>";
			echo 	"<script type='text/javascript'>
					window.location='../../dom/view/sesion.php'
					</script>";
	}else{
		while ($rows = mysql_fetch_array($sql)){
			$_SESSION['login'] = $rows['usuario'];
			$_SESSION['contra'] = $rows['password'];
			$_SESSION['seguridad'] = "ok";
		}
		if($user=='admin'){
		echo 	"<script type='text/javascript'>
				alert('Bienvenido " .$_SESSION['login']. "');
				</script>";
		echo 	"<script type='text/javascript'>
				window.location='../../dom/view/admin/menuadmin.php'
				</script>";
		}else{
			echo 	
				"<script type='text/javascript'>
				alert('Bienvenido " .$_SESSION['login']. "');
				</script>";
		echo 	"<script type='text/javascript'>
				window.location='../../inicio.php'
				</script>";
		}
	}
	mysql_close($link);
?>