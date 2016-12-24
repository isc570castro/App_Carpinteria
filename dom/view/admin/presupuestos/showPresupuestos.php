<?php
session_start();
$seguridad = $_SESSION['seguridad'];
if (!isset($seguridad)){
header ('Location:../../../../index.html');
}
include "../../../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("SELECT * FROM presupuesto, clientes WHERE clientes.idCliente=presupuesto.idCliente;" , $link) or die(mysql_error());
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/> 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Presupuestos</title>
    <link rel="stylesheet" type="text/css" href="../../../css/diseno.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../../css/sesion.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../../css/formularios.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../../css/menus.css" media="screen" />
  <link href="../../../src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../src/bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="../../../bootstrap/css/sb-admin.css" rel="stylesheet">
  <style type="text/css">

  img.logo1{
    width: 80%;
    padding-top: 80px;
  }
  h2{
    margin-top: -2px;
  }
   #fondo{
    border: 1px solid #c4c4c4;
    padding-right: 20px;
    padding-left: 20px;
    height: auto;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  }
  #buscar{

  }
  </style>
</head>
<body>
<center>
<div class="row">
<div class="superior">
<img class="logo" src="../../../imagenes/LOGO2.png">
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
       <a class="navbar-brand" href="../menuadmin.php">Menú de control</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-picture" aria-hidden="true">&nbsp; </span>Catálogo<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="../../galerias/subirFoto.php"><b>Subir foto</b></a></li>
          <li><a href="../../galerias/cocinas.php">Cocinas integrales</a></li>
          <li><a href="../../galerias/closets.php">Closets</a></li>
          <li><a href="../../galerias/camas.php">Camas</a></li>
          <li><a href="../../galerias/mesas.php">Mesas</a></li>
          <li><a href="../../galerias/buros.php">Buros</a></li>
          <li><a href="../../galerias/escritorios.php">Escritorios</a></li>
           <li><a href="../../galerias/puertas.php">Puertas</a></li>
          <li><a href="../../galerias/marcos.php">Marcos</a></li>
           <li><a href="../../galerias/otros.php">Otros</a></li>
          </ul>
        </li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" glyphicon glyphicon-file><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;</span>Consultar</span><span class="caret"></a>
          <ul class="dropdown-menu">
             <li><a href="../clientes/showClientes.php">Clientes</a></li>
             <li><a href="../proveedores/showProveedores.php">Proveedores</a></li>
             <li><a href="../productos/showProductos.php">Productos</a></li>
             <li><a href="showPresupuestos.php">Presupuesto</a></li>
             <li><a href="../ventas/showVentas.php">Ventas</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" glyphicon glyphicon-file><span class="glyphicon glyphicon-plus-sign" aria-hidden="true">&nbsp;</span>Nuevo</span><span class="caret"></a>
          <ul class="dropdown-menu">
             <li><a href="../clientes/altaClientes.php">Cliente</a></li>
             <li><a href="../proveedores/altaProveedores.php">Proveedor</a></li>
             <li><a href="../productos/altaProductos.php">Producto</a></li>
             <li><a href="generaPresupuesto.php">Presupuesto</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-file" aria-hidden="true">&nbsp; </span>Generar<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="showPresupuestos.php">Abono</a></li>
          <li><a href="showPresupuestos.php">Venta</a></li>
          <li><a href="#">Reporte de ventas</a></li>
          </ul>
        </li>
        <li><a href="../ventas/showCuentas.php"><span class="glyphicon glyphicon-book" aria-hidden="true">&nbsp; </span>Cuentas</a></li>
        <!--<li><a href="#"><span class="glyphicon glyphicon-log-out" aria-hidden="true">&nbsp; </span><b>Cerrar sesion<b/</a></li>-->
      </ul>
        <ul class="nav navbar-nav navbar-right">
       <a href="../../../../controller/sesiones/logout.php"><button type="button" id="btnlogin" class="btn btn-primary btn-lg"> Logout &nbsp;<span class="glyphicon glyphicon-log-out" aria-hidden="true"> </span></button></a>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</nav>
<div class="row">
 <div class="col-md-10 col-md-offset-1" id="fondo">
  <div class="col-md-6"><br><h2>Sección de Presupuestos</h2>
  </div>
  <div class="col-md-6">
  <div class="col-md-5"></div>
   <div class="col-md-7">
   <br>
      <form class="navbar-form navbar-left" role="search" id="buscar" method="POST" action="buscarPresupuesto.php">
     <div class="form-group" id="buscar">
      <input type="text" class="form-control" placeholder="Buscar por descripcion" name="nombre"> 
     </div>
     <button type="submit" class="btn btn-default" aria-label="Left Align">
    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </button>
    </form>
    </div>
  </div>
<div class="row">
  <div class="col-md-12 col-md-offset-0">
  <table class="table">
  <thead>
    <tr class="success" >
      <td width=28%><b>Descripción del presupuesto</b></td> <td width=15%><b>Cliente</b></td><td align="right"><b>Costo en madera</b></td><td align="right"><b>Costo en productos</b></td><td align="right" width=14%><b>Monto total</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  <tbody>
    <tr>
    <?php
    while ($rows = mysql_fetch_array($sql)){
    ?>
      <td ><a href="../../../../controller/Presupuestos/detallesPresupuesto.php?idPresupuesto=<?php echo $rows ['idPresupuesto']; ?>" data-toggle="tooltip" title="Some tooltip text!"><span class="glyphicon glyphicon-new-window"></span></a>&nbsp;&nbsp;&nbsp;<?php echo $rows ['descripcion']; ?></td>
      <td ><?php echo $rows ['nombreCliente']; ?></td>
   <td align="right">$<?php echo $rows ['montoTotalMadera']; ?>&nbsp;&nbsp;
   <a href="costoenMadera.php?idPresupuesto=<?php echo $rows ['idPresupuesto']; ?>">
   <span class="glyphicon glyphicon-new-window"></span></a></td>
   <td align="right">$<?php echo $rows ['montoTotalProductos']; ?>&nbsp;&nbsp;
   <a href="costoenProductos.php?idPresupuesto=<?php echo $rows ['idPresupuesto']; ?>">
   <span class="glyphicon glyphicon-new-window"></span></a></td>
    <td align="right">$<?php echo $rows ['montoTotal']; ?></td>   
    <td></td>
    <td align="center"><a target="_bank" data-toggle="tooltip" title="Generar reporte" href="../reportes/reportePresupuesto1.php?idPresupuesto=<?php echo $rows['idPresupuesto']; ?>"><span class="glyphicon glyphicon-file"></span></a></td>
    <td align="center"><a href="../../../../controller/presupuestos/bajaPresupuesto.php?idPresupuesto=<?php echo $rows['idPresupuesto']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
     <td align="right">
      <a href="../ventas/generarVenta.php?idPresupuesto=<?php echo $rows ['idPresupuesto']; ?>" data-toggle="tooltip" title="Generar venta">
     <span class="glyphicon glyphicon-shopping-cart"></span></a></td>
      </tr>     
<?php 
} 
?>
<tbody>
</table>
</div>
</div>
</div>
</body>
<script src="../../../src/bootstrap/js/jquery-1.10.2.js"></script>
<script src="../../../src/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../src/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../../src/bootstrap/js/sb-admin.js"></script>
</html> 
