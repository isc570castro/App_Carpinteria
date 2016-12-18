<?php
session_start();
$seguridad = $_SESSION['seguridad'];
if (!isset($seguridad)){
header ('Location:../../../index.html');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/> 
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="../../css/diseno.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../css/sesion.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../css/menus.css" media="screen" />
    <link href="../../bootstrap/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../../src/materialize/css/materialize.min.css">
  <link rel="stylesheet" href="../../src/materialize/fonts/material-design-icons/material-icons.css">
  <script src="../../src/materialize/js/jquery.js"></script>
  <script src="../../src/materialize/js/materialize.min.js"></script>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <style type="text/css">
  #btnlogin{
      background:black;
  }
  div.container-fluid{
    font-size: 15px;
  }
  img.logo1{
    width: 80%;
    padding-top: 80px;
  }

  div.container{
    padding-top: 5px;
    padding-bottom: -50px;
  }
  div.contenedor{
    padding-left: 20px;
  }
  a.menu{
    color:#595959;
    border-bottom: 1px solid #c4c4c4;
    font-size: 15px;
  }
  a.home{
    color:#595959;
    font-size:15px;
    border-bottom: 1px solid #c4c4c4;
  }
  form.navbar-form navbar-left{
    margin-left: 100px;
  }
  div.buscar{
    margin-left: 70%;
    margin-top: -30px;
    margin-bottom: 60px;
  }
  table.table{
    width: 90%;
    margin-left: 40px;
  }
  label.clientes{
    font-size: 28px;
    padding-bottom: -400px;
    margin-left: 40px;
  }
  th, td{
    text-align: center;
  }
  div.administracion{
    padding-left: 20px;
  }
  #menuadmin{
    margin-top: -10px;
     width: 84%;
     height: 100%;
     margin-left: 8%;
  }
  #contenedor1{
    margin-bottom: -50px;
  }
  #contenedor2{
    margin-top: 10px;

  }
  div.row{
    margin-top: -20px;
  }
  </style>
</head>
<body>
<center>
<div class="row">
<div class="superior">
<img class="logo" src="../../imagenes/LOGO2.png">
</div>
</div>
</center>
<div class="card-panel white z-depth-3" id="menuadmin">
    <div class="container" id="contenedor1">
    <div class="row">
      <div class="col m12">
              <H3>Menú de control</H3>
              <div class="row">
                <div class="col m3">
                  <a href="clientes/showClientes.php">
                <div class="card-panel  orange accent-1 z-depth-2 center">
                  <i class="material-icons center" style="font-size: 100px; color: black;">people</i>
                  <h5 class="black-text">Clientes</h5>
                </div>
                </a>
            </div>
             <div class="col m3">
                <a href="presupuestos/showPresupuestos.php">
                <div class="card-panel orange accent-1 z-depth-2 center">
                  <i class="material-icons center" style="font-size: 100px; color: black;">description</i>
                  <h5 class="black-text" id="h4-presupuestos" style="color: black;">Presupuesto</h4>
                </div>
                </a>
            </div>
             <div class="col m3">
                <a href="ventas/showVentas.php">
                <div class="card-panel orange accent-1 z-depth-2 center">
                  <i class="material-icons center" style="font-size: 100px; color: black;">shopping_cart</i>
                  <h5 class="black-text" id="h4-presupuestos" style="color: black;">Ventas</h4>
                </div>
                </a>
            </div>
                <div class="col m3">
                <a href="cuentas/Cuentas.php">
                <div class="card-panel orange accent-1 z-depth-2 center">
                  <i class="material-icons center" style="font-size: 100px; color: black;">perm_contact_calendar</i>
                   <h5 class="black-text" >Cuentas</h5>
                </div>
                </a>
            </div>
            <div class="col m3">
                <a href="productos/showProductos.php">
                <div class="card-panel orange accent-1 z-depth-2 center">
                  <i class="material-icons center" style="font-size: 100px; color: black;">invert_colors</i>
                  <h5 class="black-text" style="color: black;">Productos</h5>
                </div>
                </a>
            </div>
                <div class="col m3">
                  <a href="proveedores/showProveedores.php">
                <div class="card-panel  orange accent-1 z-depth-2 center">
                  <i class="material-icons center" style="font-size: 100px; color: black;">perm_identity</i>
                  <h5 class="black-text">Proveedor</h5>
                </div>
                </a>
            </div>
           
            <div class="col m3">
                <a href="../galerias/subirFoto.php">
                <div class="card-panel orange accent-1 z-depth-2 center">
                  <i class="material-icons center" style="font-size: 100px; color: black;">perm_media</i>
                  <h5 class="black-text" style="color: black;">Galería</h5>
                </div>
                </a>
            </div>
            <div class="col m3">
                <a href="../../../inicio.php">
                <div class="card-panel orange accent-1 z-depth-2 center">
                  <i class="material-icons center" style="font-size: 100px; color: black;">web</i>
                   <h5 class="black-text" >Página</h5>
                </div>
                </a>
            </div>
             <div class="col m3">
                <a href="servicios/showServicios.php">
                <div class="card-panel orange accent-1 z-depth-2 center">
                  <i class="material-icons center" style="font-size: 100px; color: black;">message</i>
                   <h5 class="black-text" >Mensajes</h5>
                </div>
                </a>
            </div>
          </div>
          </div>
      </div>
    </div>
</div>
<div class="card-panel white z-depth-3" id="menuadmin">
    <center>
    <a href="../../../controller/sesiones/logout.php"><button type="button" id="btnlogin" class="btn btn-primary btn-lg"> Logout &nbsp;<span class="glyphicon glyphicon-log-out" aria-hidden="true"> </span></button></a>
    </center>
</div>
<script src="../../src/bootstrap/js/jquery-1.10.2.js"></script>
<script src="../../src/bootstrap/js/bootstrap.min.js"></script>
<script src="../../src/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../src/bootstrap/js/sb-admin.js"></script>
</html>