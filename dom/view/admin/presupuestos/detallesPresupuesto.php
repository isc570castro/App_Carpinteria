  <?php
  session_start();
  $seguridad = $_SESSION['seguridad'];
  if (!isset($seguridad)){
    header ('Location:../../../../index.html');
  }
  $idPresupuesto=$_REQUEST['idPresupuesto'];
  include "../../../../model/conexion.php";
  $objConex = new Conexion();
  $link=$objConex->conectarse();
  $sql = mysql_query("SELECT * FROM clientes" , $link) or die(mysql_error());
  $sql2 = mysql_query("SELECT * FROM presupuesto, clientes WHERE idPresupuesto='$idPresupuesto' and presupuesto.idCliente=clientes.idCliente" , $link) or die(mysql_error()); 
  $rows2=mysql_fetch_array($sql2);          
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
        form{
    background-color: white;
    width: 90%;
    border: 1px solid #c4c4c4;
    padding-right: 20px;
    padding-left: 5%;
    height: auto;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  }
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
        width: 850px;
        border-radius:5px;
      }
      #guardar{
        margin-top: 15px;
      }
      #terminar{
        width: 80%;
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

<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <form id="frmRegistro" class="registro" action="../../../../controller/presupuestos/actualizarPresupuesto.php?idPresupuesto=<?php echo $idPresupuesto;?>" method="POST" enctype="multipart/form-data" name="frmRegistro" >
    <div class="row">
    <div class="col-md-11">
      <h1>Detalles de presupuesto</h1>
      </div>
     
      </div>
      <legend></legend>
      <legend><font size="5"> Datos generales</font></legend>
      <div class="form-group row">
       <div class="form-group has-feedback">
        <label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Descripción general</label>
        <div class=" col-xs-10 col-md-11">
         <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
          <input class="form-control" type="text" id="nombre" value="<?php echo $rows2['descripcion']?>" placeholder="Nombre" name="descripcion" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+">
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
     <select  class="form-control" type="textarea" id="nombreCliente" name="idCliente">
       <option value="<?php echo $rows2['idCliente']?>" selected="selected"><?php echo $rows2['nombreCliente']?></option>
       <?php                   
       while ($rows = mysql_fetch_array($sql)){   
        ?>
        <option value="<?php echo $rows['idCliente'];?>"><?php echo $rows['nombreCliente']; ?></option>
        <?php
      }
      ?>
    </select>
  </div> 
</div>
</div>
 <legend><font size="5"> Cuenta de gastos</font></legend>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-md-2 col-form-label">Madera de pino:</label>
  <label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Total de pies:</label>
  <div class=" col-xs-10 col-md-2">
   <div class="input-group"> 
    <input class="form-control" type="text" id="totalPiesPino" value="<?php echo $rows2['totalPies']?>" placeholder="0" name="totalPiesPino">
  </div> 
</div>
<label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Costo de 1 pie</label>
<div class=" col-xs-10 col-md-2">
 <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
  <input class="form-control" onblur="calcularTotalPino();" type="text" id="precioPiePino" value="<?php echo $rows2['precioPie']?>" placeholder="0.00" name="precioPiePino">
</div> 
</div>
<label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Total </label>
<div class=" col-xs-10 col-md-2">
 <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
  <input class="form-control" type="text" id="precioPino" value="<?php echo $rows2['montoTotalPino']?>" readonly placeholder="0.00" name="precioPino">
</div> 
</div>
<div class=" col-xs-10 col-md-1">
 <div class="input-group"> 
   <a href="costoenMadera.php?idPresupuesto=<?php echo $idPresupuesto; ?>">
     <span class="glyphicon glyphicon-new-window"></span></a>
   </div> 
 </div>
 </div>
 <div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-md-2 col-form-label">Madera de cahoba:</label>
  <label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Total de pies:</label>
  <div class=" col-xs-10 col-md-2">
   <div class="input-group"> 
    <input class="form-control" type="text" id="totalPiesCahoba" value="<?php echo $rows2['totalPiesCahoba']?>" placeholder="0"  name="totalPiesCahoba">
  </div> 
</div>
<label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Costo de 1 pie</label>
<div class=" col-xs-10 col-md-2">
 <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
  <input class="form-control" onblur="calcularTotalCahoba();" type="text" id="precioPieCahoba"  value="<?php echo $rows2['precioPieCahoba']?>" placeholder="0.00" name="precioPieCahoba">
</div> 
</div>
<label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Total  </label>
<div class=" col-xs-10 col-md-2">
 <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
  <input class="form-control" type="text" id="precioCahoba" value="<?php echo $rows2['montoTotalCahoba']?>" readonly placeholder="0.00" name="precioCahoba">
</div> 
</div>
<div class=" col-xs-10 col-md-1">
 <div class="input-group"> 
   <a href="costoenMaderaCahoba.php?idPresupuesto=<?php echo $idPresupuesto; ?>">
     <span class="glyphicon glyphicon-new-window"></span></a>
   </div> 
 </div>
 </div>
 <div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-md-2 col-form-label">Madera de banak:</label>
  <label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Total de pies:</label>
  <div class=" col-xs-10 col-md-2">
   <div class="input-group"> 
    <input class="form-control" type="text" id="totalPiesBanak" value="<?php echo $rows2['totalPiesBanak']?>" placeholder="0" name="totalPiesBanak">
  </div> 
</div>
<label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Costo de 1 pie</label>
<div class=" col-xs-10 col-md-2">
 <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
  <input class="form-control" onblur="calcularTotalBanak();" type="text" id="precioPieBanak" value="<?php echo $rows2['precioPieBanak']?>" placeholder="0.00" name="precioPieBanak">
</div> 
</div>
<label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Total</label>
<div class=" col-xs-10 col-md-2">
 <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
  <input class="form-control" type="text" id="precioBanak" value="<?php echo $rows2['montoTotalBanak']?>" readonly placeholder="0.00" name="precioBanak">
</div> 
</div>
<div class=" col-xs-10 col-md-1">
 <div class="input-group"> 
   <a href="costoenMaderaBanak.php?idPresupuesto=<?php echo $idPresupuesto; ?>">
     <span class="glyphicon glyphicon-new-window"></span></a>
   </div> 
 </div>
 </div>
 <div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-md-1 col-form-label col-md-offset-8">Total de madera:</label>
  <div class=" col-xs-10 col-md-2">
   <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input class="form-control" type="text" id="totalMadera" value="<?php echo $rows2['montoTotalMadera']?>" placeholder="0.00" name="totalMadera" readonly>
  </div> 
</div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-md-1 col-form-label col-md-offset-8">Total de herrajes</label>
  <div class=" col-xs-10 col-md-2 ">
   <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input class="form-control" type="text" id="montoTotalProductos" value="<?php echo $rows2['montoTotalProductos'];?>" placeholder="0.00" name="montoTotalProductos" readonly>
  </div> 
</div>
<div class=" col-xs-10 col-md-1">
 <div class="input-group"> 
   <a href="costoenProductos.php?idPresupuesto=<?php echo $idPresupuesto; ?>">
     <span class="glyphicon glyphicon-new-window"></span></a>
   </div> 
 </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-md-1 col-form-label col-md-offset-8">MontoTotal</label>
  <div class=" col-xs-10 col-md-2 ">
   <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input class="form-control" type="text" id="montoTotal" value="<?php echo $rows2['montoTotal'];?>" placeholder="0.00" name="montoTotal" readonly>
  </div> 
</div>
</div>
<div class="row">
  <div class="col-md-8"></div>
  <div class="col-md-1"><button type="submit" class="btn btn-primary" id="registrar"> <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> </button></div>
  <div class="col-md-1"><a href="detallesPresupuesto2.php?idPresupuesto=<?php echo $idPresupuesto;?>"><button class="btn btn-primary" id="registrar"> <span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span> </button></a></div>
  <div class="col-md-2"><a href="showPresupuestos.php"><input type="button" class="btn btn-primary" id="registrar" value="Terminar"></a></div>
</div>
<br>
</form>
</div>
</div>
<br>
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
<script>
 function calcularTotalPino(){
  var pies = $("#totalPiesPino").val();
  if (isNaN(pies)){
    pies=0;
  }
  var precio=$("#precioPiePino").val();
  if (isNaN(precio)){
    precio=0;
  }
  var  precioCahoba=$("#precioCahoba").val();
  precioCahoba=parseFloat(precioCahoba);
   if (isNaN(precioCahoba)){
    precioCahoba=0;
  }
  var precioBanak=$("#precioBanak").val();
  precioBanak=parseFloat(precioBanak);
  if (isNaN(precioBanak)){
    precioBanak=0;
  }

  var montoTotal = pies*precio;
  $("#precioPino").val((montoTotal).toFixed(2));
  var totalMadera=montoTotal+precioCahoba+precioBanak;
    $("#totalMadera").val((totalMadera).toFixed(2));

     var montoTotalProductos=$("#montoTotalProductos").val();
  montoTotalProductos=parseFloat(montoTotalProductos);
  if (isNaN(montoTotalProductos)){
    montoTotalProductos=0;
  }
    var montoTotal=totalMadera+montoTotalProductos;
    $("#montoTotal").val((montoTotal).toFixed(2));
}
 function calcularTotalCahoba(){
  var pies = $("#totalPiesCahoba").val();
  if (isNaN(pies)){
    pies=0;
  }
  var precio=$("#precioPieCahoba").val();
  if (isNaN(precio)){
    precio=0;
  }
   var  precioPino=$("#precioPino").val();
  precioPino=parseFloat(precioPino);
   if (isNaN(precioPino)){
    precioPino=0;
  }
  var precioBanak=$("#precioBanak").val();
  precioBanak=parseFloat(precioBanak);
  if (isNaN(precioBanak)){
    precioBanak=0;
  }
  var montoTotal = pies*precio;
  $("#precioCahoba").val((montoTotal).toFixed(2));
  var totalMadera=montoTotal+precioPino+precioBanak;
    $("#totalMadera").val((totalMadera).toFixed(2));
       var montoTotalProductos=$("#montoTotalProductos").val();
  montoTotalProductos=parseFloat(montoTotalProductos);
  if (isNaN(montoTotalProductos)){
    montoTotalProductos=0;
  }
    var montoTotal=totalMadera+montoTotalProductos;
    $("#montoTotal").val((montoTotal).toFixed(2));
}
 function calcularTotalBanak(){
  var pies = $("#totalPiesBanak").val();
  if (isNaN(pies)){
    pies=0;
  }
  var precio=$("#precioPieBanak").val();
  if (isNaN(precio)){
    precio=0;
  }
     var  precioPino=$("#precioPino").val();
  precioPino=parseFloat(precioPino);
   if (isNaN(precioPino)){
    precioPino=0;
  }
    var  precioCahoba=$("#precioCahoba").val();
  precioCahoba=parseFloat(precioCahoba);
   if (isNaN(precioCahoba)){
    precioCahoba=0;
  }
  var montoTotal = pies*precio;
  $("#precioBanak").val((montoTotal).toFixed(2));
    var totalMadera=montoTotal+precioPino+precioCahoba;
    $("#totalMadera").val((totalMadera).toFixed(2));
       var montoTotalProductos=$("#montoTotalProductos").val();
  montoTotalProductos=parseFloat(montoTotalProductos);
  if (isNaN(montoTotalProductos)){
    montoTotalProductos=0;
  }
    var montoTotal=totalMadera+montoTotalProductos;
    $("#montoTotal").val((montoTotal).toFixed(2));
}
</script>
</html>
