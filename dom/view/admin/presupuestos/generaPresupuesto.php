  <?php
  session_start();
$seguridad = $_SESSION['seguridad'];
if (!isset($seguridad)){
header ('Location:../../../../index.html');
}
  include "../../../../model/conexion.php";
  $objConex = new Conexion();
  $link=$objConex->conectarse();
  $sql = mysql_query("SELECT nombreCliente FROM Clientes" , $link) or die(mysql_error());        
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
  div.container-fluid{
    font-size: 15px;
  }
  img.logo1{
    width: 80%;
    padding-top: 80px;
  }
form{
    width: 90%;
  
    border: 1px solid #c4c4c4;
    padding-right: 20px;
    padding-left: 20px;
    height: auto;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  }
  #registrar{
    width: 100%;
  }
#detalles{
    width: 890px;
    border-radius:5px;
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
             <li><a href="showPresupuestos.php">Presupuestos</a></li>
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
          <li><a href="generaPresupuesto.php">Abono</a></li>
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
<br>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
  <form id="frmRegistro" class="registro" action="../../../../controller/presupuestos/altaPresupuesto.php" method="POST" enctype="multipart/form-data" name="frmRegistro" >
  <h1>Registro de presupuesto</h1>
  <legend></legend>
    <legend><font size="5"> Datos generales</font></legend>
    <div class="form-group row">
     <div class="form-group has-feedback">
  <label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Descripción general</label>
   <div class=" col-xs-10 col-md-11">
   <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
    <input class="form-control" type="text" id="nombre" placeholder="Nombre" name="descripcion" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+">
  </div> 
</div>
</div>
</div>
   <div class="form-group row">
     <div class="form-group has-feedback">
  <label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Detalles</label>
   <div class=" col-xs-10 col-md-11">
   <div class="input-group">
    <textarea class="form-control" type="text" id="detalles" placeholder="Describa los detalles del presupuesto" name="detalles" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+"></textarea>
  </div> 
</div>
</div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Cliente</label>
  <div class=" col-xs-10 col-md-11">
   <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
   <select  class="form-control" type="textarea" id="nombreCliente" name="nombreCliente">
   <option value="" selected="selected">Seleccione un cliente...</option>
     <?php                   
  while ($rows = mysql_fetch_array($sql)){   
  ?>
      <option value="<?php echo $rows['nombreCliente']; ?>"><?php echo $rows['nombreCliente']; ?></option>
    <?php
  }
    ?>
    </select>
  </div> 
</div>
</div>
<div class="row">
  <div class="col-md-10"></div>
  <div class="col-md-2"><button type="submit" class="btn btn-primary" id="registrar"> Registrar </button></div>
</div>
 <br>
</form>
</div>
</div>
<script src="../../../src/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../src/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../../src/bootstrap/js/sb-admin.js"></script>
<script src="../../../src/bootstrap/js/jquery.min.js"></script> 
<script src="../../../src/bootstrap/js/bootstrapvalidator.min.js"></script> 
<script src="../../../src/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../src/bootstrap/js/sb-admin.js"></script>
<script>
  $(document).ready(function () {
$('#frmRegistro').bootstrapValidator({
   /*feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },*/
    fields: {
          descripcion: {
            validators: {
                stringLength: { min: 1},
                 stringLength: { max: 45 },
                notEmpty: { message:'Introduce una descripción general del presupuesto'}
            }
        },
         detalles: {
            validators: {
                stringLength: { min: 1},
                 stringLength: { max: 200 },
            }
        },
        nombreCliente: { validators: { notEmpty: { message: 'Seleccione un cliente' } } },
    }
}).on('success.form.bv', function (e) {
    $('#success_message').slideDown({ opacity: 'show' }, 'slow');
    $('#contact_form').data('bootstrapValidator').resetForm();
    e.preventDefault();
    var $form = $(e.target);
    var bv = $form.data('bootstrapValidator');
    $.post($form.attr('action'), $form.serialize(), function (result) {
        console.log(result);
    }, 'json');
});
});
</script>
</html>
 