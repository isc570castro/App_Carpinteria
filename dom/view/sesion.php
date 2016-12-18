<!DOCTYPE html>
<html>
<head>
  <!--Se define la ruta a donde se quiere dar el estilo y esto se hace en el encabezado  -->
  <meta charset="utf-8"/> 
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="../css/menus.css" media="screen" />
   <link rel="stylesheet" type="text/css" href="../css/login.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/formularios.css" media="screen" />
  <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../src/bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="./src/bootstrap/css/sb-admin.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <style>
  img.logo{
    margin-top:30px;
    height:100px;
    width:530px;
    
    margin-bottom: -20px;
  }
  #info{
    text-align: center;
    color: white;
    
  }
  p.btnregistrase{
    text-align: center;
  }
    div.superior {
    margin-top: -30px;
    background: #111;
    background: -moz-linear-gradient(#444, #111); 
      background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));  
    background: -webkit-linear-gradient(#444, #111);  
    background: -o-linear-gradient(#444, #111);
    background: -ms-linear-gradient(#444, #111);
    background: linear-gradient(#444, #111);
  }
  div.info{
    height:87px;
    width:100%;
    background: #111;
    background: -moz-linear-gradient(#444, #111); 
      background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));  
    background: -webkit-linear-gradient(#444, #111);  
    background: -o-linear-gradient(#444, #111);
    background: -ms-linear-gradient(#444, #111);
    background: linear-gradient(#444, #111);
  }
  body #body{
    background-color: white;
  }
  .fondo{
    width: 80%;
      background: white;
      border: 1px solid #c4c4c4;
      padding-left: -20px;
      height: auto;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  }
  h2.subtitulo1{
    margin: -28px 0px 0px;
      padding: 20px 65px;
      line-height: 30px;
      font-size: 25px;
      font-weight: 200;
      color:     #4d4d4d;
      text-align:left;
      background: #f7f7f7;
  }
  p.texto{
    font-size: 15px;
  }

  </style>
</head>
<body id="body">
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
<br>
 <form class="login" name="login" method="POST" action ="../../controller/sesiones/checkUser.php" enctype="multipart/part-data">
    <h1 class="login-title">Login</h1>
    <div class="row">
    <div class="col-md-12">
    <input name="usuario" type="text" class="login-input" placeholder="Usuario" autofocus>
    <input type="password" class="login-input" placeholder="Contraseña" name="password">
    <input type="submit" value="Aceptar" class="login-button" id="aceptar"><br><br>
    <a href="../../index.html"> <button type="button" class="btn btn-default" id="cancelar" data-dismiss="modal">Cancelar</button>
    <p class="login-lost"><a href="recuperaPassword">¿Olvidaste tu contraseña?</p></a>
    <p class="btnregistrase"><a href="registro.php">Registrarse</a></p>
    <br>
  </div>
  </div>
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