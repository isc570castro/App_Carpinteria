<!DOCTYPE html>
<html>
<head>
	<!--Se define la ruta a donde se quiere dar el estilo y esto se hace en el encabezado  -->
	<meta charset="utf-8"/> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<title>About</title>
  <link rel="stylesheet" type="text/css" href="../css/diseno.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/menus.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/formularios.css" media="screen" />
  <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../src/bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="./src/bootstrap/css/sb-admin.css" rel="stylesheet">
	<style>
	.fondo{
		width: 100%;
  		background: white;
  		border: 1px solid #c4c4c4;
      height: auto;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  }
  h2.subtitulo1{
		margin: -28px 0px 0px;
  		padding: 20px 65px;
  		line-height: 30px;
  		font-size: 25px;
  		font-weight: 200;
  		color: 		 #4d4d4d;
  		text-align:left;
  		background: #f7f7f7;
  }
  p.texto{
  	font-size: 15px;
  }
  img{
    width: 100%;
  }
	</style>
</head>
<body>
<center>
<div class=row>
<div class="col-xs-12  col-md-12">
<div class="superior">
<img class="logo" src="../imagenes/LOGO2.PNG">
</div>
</div>
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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br>
		<center>
		<div class="fondo">
		<table align="center" width="100%">
		<tr width=100%>
		<td >
		<div class="texto">
		<h2 class="subtitulo1">&nbsp;Quienes somos<br>
		</h2>
		
		</td>
		</tr>
		<tr>
			<td>
			<div class="row"><br>
		<p class="texto" style="text-align:justify;">Bienvenidos a la página web de nuestra empresa. Somos fabricantes de todo tipo de muebles, con una trayectoria de más de 10 años en el mercado, ofreciendo a nuestros clientes los más modernos y exclusivos productos y servicios. Para Carpintería Alex siempre ha sido una de nuestras metas conseguir fabricar productos de la mayor calidad hasta en el más minimo detalle. <br><br>Para llegar a este objetivo, seleccionamos las mejores materias primas y optimizar nuestros procesos de fabricación, llegando a acuerdos en exclusiva con importantes proveedores. También prestamos la máxima atención a nuestros servicios postventa, claro que existe la garantia en nuestros productos consiguiendo para nuestros clientes la máxima satisfacción con una atención personalizada. La larga experiencia de Carpintería "Alex" en este sector, ha hecho que muchos clientes, tanto profesionales como particulares hayan continuado confiando en nuestro trabajo.<br><br>Nosotros nos podemos adaptar a ti; si tu tienes algun modelo que te gusta y no lo tenemos disponible. Basta que te pongas en contacto con nosotros y nos mandes tus dados y una respectiva foto del modelo que quieres para poder trabar. <br><br>  </p> </div><br>
			</td>
		</tr></table></div><br>
		</center>
		</div>
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