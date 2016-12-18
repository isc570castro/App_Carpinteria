<!DOCTYPE html>
<html>
<head>
	<!--Se define la ruta a donde se quiere dar el estilo y esto se hace en el encabezado  -->
	<meta charset="utf-8"/> 
	<title>Servicio</title>
	<link rel="stylesheet" type="text/css" href="../css/registroUsuario.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../css/diseno.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../css/formularios.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../css/menus.css" media="screen" />
	 <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../src/bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<style>
	</style>
</head>
<body>
<center>
<div class="row">
<div class="superior">
<img class="logo" src="../imagenes/LOGO2.png">
</div>
</div>
</center>
<nav class="navbar navbar-inverse" id="nav">
 <div class="container">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../../inicio.php">Principal</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-picture" aria-hidden="true">&nbsp;</span>Catálogo<span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a href="galerias/cocinas.php">Cocinas integrales</a></li>
          <li><a href="galerias/closets.php">Closets</a></li>
          <li><a href="galerias/camas.php">Camas</a></li>
          <li><a href="galerias/mesas.php">Mesas</a></li>
          <li><a href="galerias/buros.php">Buros</a></li>
          <li><a href="galerias/escritorios.php">Escritorios</a></li>
           <li><a href="galerias/puertas.php">Puertas</a></li>
          <li><a href="galerias/marcos.php">Marcos</a></li>
           <li><a href="galerias/otros.php">Otros</a></li>
          </ul>
        </li>
      <li><a href="ubicacion.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true">&nbsp;</span>Ubicación</a></li>
      <li><a href="about.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true">&nbsp;</span>Quienes somos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <a href="../../controller/sesiones/logout.php"<li><button type="button" id="btnlogin" class="btn btn-primary btn-lg"> Logout &nbsp;<span class="glyphicon glyphicon-log-out" aria-hidden="true"> </span></button></a>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<form class="login" name="login" method="post" action ="dom/view/contacto.html" enctype="multipart/part-data">
<table>
<tr>
	<h1 class="registro-titulo">Perdir servicio</h1>
</tr>
	<tr>
		<td>
			 <h1 class="labDatos">Descripción:</h1>
		</td>
		<td >
			<textarea id="descripcion" name="descripcion" cols="40" rows="5"></textarea><br>
		</td>
	</tr>
	<tr>
			<td colspan="2">
			<br>
				<h2 class="labDatos">Para mejorar tu servicio puedes incluir una imagen donde puedas expresar mejor la descripcion de lo que deseas:</h2>
			</td>
		</tr>
	<tr>
		<td>
		</td>
		<td>
			<input class="foto" type="file" name="adjunto"/><br><br>
		</td>
	</tr>
	<tr>
	<td colspan="2">
		<input type="submit" value="Enviar" class="btnEnviar">
	</td>		
	</tr>
	</table>
	</form>
<footer>
<br>
<div class=row>
<div class="col-xs-12 col-md-12">
  <div class="info">
  <h6 id="info"><br>Calle Colón #7 | Colonia la viña<br>Valparaiso Zacatecas<br>Tel. 044 457 102 8718<br>Correo Electronico: carpinteriaalex@hotmail.com</h6> 
  </div>
</div>
</div>
</center>
</footer>
</body>
 <script src="../src/bootstrap/js/jquery-1.10.2.js"></script>
<script src="../src/bootstrap/js/bootstrap.min.js"></script>
<script src="../src/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- SB Admin Scripts - Include with every page -->
<script src="../src/bootstrap/js/sb-admin.js"></script>
</html>