<?php
session_start();
$seguridad = $_SESSION['seguridad'];
if (!isset($seguridad)){
echo  "<script type='text/javascript'>
    alert('Debes loguearte para poder ingresar al catálogo');
    </script>";
header ('Location:index.html');
}
$usuario = $_SESSION['login'];
?>
<!DOCTYPE html>
<html>
<head>
  <!--Se define la ruta a donde se quiere dar el estilo y esto se hace en el encabezado  -->
  <meta charset="utf-8"/> 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Principal</title>
  <link rel="stylesheet" type="text/css" href="dom/css/diseno.css" media="screen" />
   <link rel="stylesheet" type="text/css" href="dom/css/login.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="dom/css/menus.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="dom/css/inicio.css" media="screen" />
  <link href="dom/src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="dom/src/bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="dom/src/bootstrap/css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
  </style>
</head>
<body>
<center>
<center>
<div class="row">
<div class="superior">
<img class="logo" src="dom/imagenes/LOGO2.png">
</div>
</div>
</div>
</center>
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
      <a class="navbar-brand" href="">Principal</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-picture" aria-hidden="true">&nbsp;</span>Catálogo<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="dom/view/galerias/cocinas.php">Cocinas integrales</a></li>
          <li><a href="dom/view/galerias/closets.php">Closets</a></li>
          <li><a href="dom/view/galerias/camas.php">Camas</a></li>
          <li><a href="dom/view/galerias/mesas.php">Mesas</a></li>
          <li><a href="dom/view/galerias/buros.php">Buros</a></li>
          <li><a href="dom/view/galerias/escritorios.php">Escritorios</a></li>
           <li><a href="dom/view/galerias/puertas.php">Puertas</a></li>
          <li><a href="dom/view/galerias/marcos.php">Marcos</a></li>
           <li><a href="dom/view/galerias/otros.php">Otros</a></li>
          </ul>
        </li>
      <li><a href="dom/view/ubicacion.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true">&nbsp;</span>Ubicación</a></li>
      <li><a href="dom/view/about.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true">&nbsp;</span>Quienes somos</a></li>
      <?php 
      if($usuario=='admin'){
        echo '
      <li><a href="dom/view/admin/menuadmin.php"><span class="glyphicon glyphicon-briefcase" aria-hidden="true">&nbsp;</span>Administración</a></li>
        ';
      }else{
        echo'
      <li><a style="cursor:pointer;" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-envelope" aria-hidden="true" >&nbsp;</span>Pedir servicio</a></li>
      ';
      }
      ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <a href="controller/sesiones/logout.php"><button type="button" id="btnlogin" class="btn btn-primary btn-lg"> Logout &nbsp;<span class="glyphicon glyphicon-log-out" aria-hidden="true"> </span></button></a> ';
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
     <div class="container">
        <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
<center>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <img class="carrucel" src="dom/imagenes/img1.jpg" alt="..." data-src="holder.js/900x400/auto/#777:#7a7a7a/text:Second slide" width="600" height="200">
      <div class="carousel-caption">
      
      </div>
    </div>
    <div class="item">
      <img class="carrucel" src="dom/imagenes/img2.jpg" alt="..." data-src="holder.js/900x400/auto/#777:#7a7a7a/text:Second slide" width="600" height="200">
      <div class="carousel-caption">
       
      </div>
    </div>
    <div class="item">
      <img class="carrucel" src="dom/imagenes/img3.jpg" alt="..." data-src="holder.js/900x400/auto/#777:#7a7a7a/text:Second slide">
      <div class="carousel-caption">
       
      </div>
    </div>
  </div>
        </div>
</center>
</div>
</div>
</body>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-body">
    <form class="login" name="login" method="POST" action ="controller/sesiones/checkUser.php" enctype="multipart/part-data">
    <h1 class="login-title">Login</h1>
    <div class="row">
    <div class="col-md-12">
    <input name="usuario" type="text" class="login-input" placeholder="Usuario" autofocus>
    <input type="password" class="login-input" placeholder="Contraseña" name="password">
    <input type="submit" value="Aceptar" class="login-button" id="aceptar"><br><br>
     <button type="button" class="btn btn-default" id="cancelar" data-dismiss="modal">Cancelar</button>
    <p class="login-lost"><a href="recuperaPassword">¿Olvidaste tu contraseña?</a></p>
    <p class="btnregistrase"><a href="dom/view/registro.php">Registrarse</a></p>
    <br>
  </div>
  </div>
  </form>
</div>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Nuevo mensaje</h4>
      </div>
      <div class="modal-body">
        <form action="controller/servicios/registraServicio.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="control-label">De:</label>
            <input type="text" class="form-control" id="recipient-name" value="<?php echo $_SESSION['login']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Para:</label>
            <input type="text" class="form-control" id="recipient-name" value="Administrador" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Mensaje:</label>
            <textarea class="form-control" id="message-text" name="mensaje" required></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      <input type="submit" id="enviar" class="btn btn-primary" value="Enviar">
      </form>
      </div>
    </div>
  </div>
</div>
</footer>
</body>
<script src="dom/src/bootstrap/js/jquery-1.10.2.js"></script>
<script src="dom/src/bootstrap/js/bootstrap.min.js"></script>
<script src="dom/src/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="dom/src/bootstrap/js/sb-admin.js"></script>
</html>