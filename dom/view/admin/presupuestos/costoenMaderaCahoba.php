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
$sql = mysql_query("SELECT * FROM materiaPrima where idPresupuesto='$idPresupuesto' and tipoMadera='cahoba';" , $link) or die(mysql_error());
/*$sqlSumaPresios= mysql_query("select SUM(montoTotal) from materiaPrima where idPresupuesto='$idPresupuesto';", $link) or die(mysql_error());
$row = mysql_fetch_array($sqlSumaPresios);*/
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
    h1{
      padding-top: -3px;
    }

    #cantidad{
      width: 100%;

    }
    .presio{
      margin-left: 35px;
      margin-top: 8px;
    }
    .montoTotal{
      margin-top: 8px;
      margin-left: 56px;
    }
    #pies{
      margin-top: 4px;
      margin-left: -5px;
    }
    #row{
      margin-bottom: 10px;
    }
    label{
      padding-left:10px;
    }
    .cantidad{
      text-align: center;
    }
    input{
      text-align: center;
    }
    #nombrePresupuesto{
      text-align: left;
    }
    #botones{
      width: 100%;
      background: #111;
      background: -moz-linear-gradient(#444, #111); 
      background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));  
      background: -webkit-linear-gradient(#444, #111);  
      background: -o-linear-gradient(#444, #111);
      background: -ms-linear-gradient(#444, #111);
      background: linear-gradient(#444, #111);  
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
          <li><a href="costoenMadera.php">Abono</a></li>
          <li><a href="showPresupuestos.php">Ventas</a></li>
          <li><a target="_bank" href="../reportes/reportemadera.php?idPresupuesto=<?php echo $idPresupuesto;?>&tipoMadera=CAHOBA">Reporte</a></li>
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
<div class="col-md-11 col-md-offset-1">
  <form class="registro" action="../../../../controller/Presupuestos/registraMaderaCahoba.php?idPresupuesto=<?php echo $idPresupuesto;?>" method="POST" enctype="multipart/form-data" name="frmaltaPresupuesto">
    <h1>Cálculo de pies de Cahoba</h1>
    <legend></legend>
   <!-- <div class="form-group row">
      <label for="example-search-input" class="col-xs-1 col-form-label">Descripción</label>
      <div class="col-md-11">
        <input class="form-control" type="text" id="nombrePresupuesto" name="descripcionRegistro" placeholder="Descripcion general del registro" autofocus>
      </div>
    </div> -->
    <div class="row" id="row">
    <div class="col-md-2"><input class="form-control" type="number"  onblur="calcularPies();" id="cantidad" placeholder="Cantidad" name="cantidad" required="required" autofocus></div>
    <div class="col-md-2"><input class="form-control" type="text"  onblur="calcularPies();" id="grueso" placeholder="Grueso" name="grueso" required="required"></div>
    <div class="col-md-2">
      <input class="form-control" type="text" onblur="calcularPies();" placeholder="Ancho" id="ancho" name="ancho" required="required" ></div>
      <div class="col-md-2">
        <input class="form-control" type="text" onblur="calcularPies();" id="largo" placeholder="Largo" name="largo" required="required" >
      </div>
      <div class="col-md-2"><label for="example-search-input" class="presio" data-toggle="tooltip" title="Cantidad total de pies">C.T.P.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-right" onclick="calcularPies();" style="cursor:pointer;"></span></label></div>
      <div class="col-md-2"><input class=" form-control" type="text"  onfocus="calcularPies();" name="cantPies" id="cantpies" placeholder="Total de pies" readonly="" required=""></div>  
    </div> 
    <!--<div class="row" id="row">
     <div class="col-md-1"><label for="example-search-input" class="presio" data-toggle="tooltip" title="Costo de un pie">C.P.$</label></div>
     <div class="col-md-2"><input class=" form-control" type="text"  name="costoPie" id="costoPie"  onblur="presioUnitario1();" placeholder="0.00" required="required" ></div>
     <div class="col-md-1"><label for="example-search-input" class="presio" data-toggle="tooltip" title="Presio unitario" >P.U.$</label></div>
     <div class="col-md-2"><input class=" form-control" type="text"  name="presioUnitario" id="presioUnitario" placeholder="0.00" required="required" readonly=""></div>
     <div class="col-md-1"><label for="example-search-input" class="presio" data-toggle="tooltip" title="Monto Total">M.T.$ </label><br></div>
     <div class="col-md-2"><input class=" form-control" type="text"  id="montoTotal" name="montoTotal" placeholder="0.00" readonly=""></div>
     <div class="col-md-1"><label for="example-search-input" class="presio" data-toggle="tooltip" title="Total de presupuesto">T.P.</label></div>
     <div class="col-md-2">
       <div class="input-group"> <span data-toggle="tooltip" title="Costo total de presupuesto" class="input-group-addon"><i class="glyphicon glyphicon-usd" ></i></span><input class="form-control" readonly type="text" id="precio" placeholder="0.00" name="totalProyecto" readondly onKeyPress="return solonumeros(event)" value="<?php #if ($row['SUM(montoTotal)']>0) { echo $row['SUM(montoTotal)'];} ?>"></div>
     </div>
   </div>-->
   <div class="row" id="row"> 
    <div class="col-md-2 col-md-offset-1">

    </div> 
    <div class="col-md-1 col-md-offset-6"><button type="submit" class="btn btn-primary" id="registrar"> 
  <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> </button></div>
    <div class="col-md-2"><a href="detallesPresupuesto.php?idPresupuesto=<?php echo $idPresupuesto;?>" ><input type="button" class="btn btn-primary" id="botones" value="Terminar"></a></div>
  </div>
  <table class="table">
    <thead>
      <tr class="success">
        <td align="center"><b>Cantidad</b></td>
        <td align="center"><b>Grueso</b></td>
        <td align="center"><b>Ancho</b></td>
        <td align="center"><b>Largo</b></td>
        <td align="center"><b>Cant. Pies</b></td>
        <!--<td align="center"><b>Presio Pie</b></td>
        <td align="center"><b>Presio Unitario</b></td>
        <td align="center"><b>Monto Total</b></td>-->
        <td></td>
      </thead>
      <tbody>
        <tr align="center">
          <tr align="center">
            <?php
            while ($rows = mysql_fetch_array($sql)){
             ?>
             <td align="center"><?php echo $rows ['cantidad']; ?></td>
             <td align="center"><?php echo $rows ['grueso']; ?></td>
             <td align="center"><?php echo $rows ['ancho']; ?></td>
             <td align="center"><?php echo $rows ['largo']; ?></td>
             <td align="center"><?php echo $rows ['cantPies']; ?></td>
             <!--<td align="center">$<?php #echo $rows ['presioPie']; ?></td>
             <td align="center">$<?php#echo $rows ['presioUnitario']; ?></td>
             <td align="center">$<?php #echo $rows ['montoTotal']; ?></td>-->
             <td align="center"><a href="../../../../controller/presupuestos/bajaRegistroMadera.php?noRegistro=<?php echo $rows ['noRegistro'];?>&idPresupuesto=<?php echo $idPresupuesto; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
           </tr>
           <?php  
         }
         ?>
         <tbody>
         </table>
       </div>
     </body>
     <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
      selector: "[data-toggle=tooltip]",
      container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
    .popover()
  </script>
  <script src="../../../src/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../../src/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="../../../src/bootstrap/js/sb-admin.js"></script>
  <script src="../../../src/bootstrap/js/jquery.min.js"></script> 
  <script src="../../../src/bootstrap/js/bootstrapvalidator.min.js"></script> 
  <script src="../../../src/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../../src/bootstrap/js/sb-admin.js"></script>
  <script type="text/javascript">
    function verificaCheck(){ 
     if($('input[name=triplay]').is(':checked')){
      document.getElementById("grueso").readOnly = true;
    }
    else{
      document.getElementById("grueso").readOnly = false;
    }
  }
  function calcularPies(){  
    var cantpies;
    var cantidad1 = $("#cantidad").val();

    cantidad = parseInt(cantidad1);
    if (isNaN(cantidad)){
      cantidad=0;
    }
    var grueso1 = $("#grueso").val();
    grueso = parseFloat(grueso1);
    if (isNaN(grueso)){
      grueso=0;
    }
    var ancho1 = $("#ancho").val();
    ancho = parseFloat(ancho1);
    if (isNaN(ancho)){
      ancho=0;
    }
    var largo1 = $("#largo").val();
    largo = parseFloat(largo1);
    if (isNaN(largo)){
      largo=0;
    }
    if($('input[name=triplay]').is(':checked')){
     cantpies = ((cantidad * ancho * largo) / 12);
     $("#cantpies").val(cantpies);
   }else{
    cantpies = ((cantidad * grueso * ancho * largo) / 12);
    $("#cantpies").val((cantpies).toFixed(2));
  }
}
/*function presioUnitario1(){
  var cantidad = $("#cantidad").val();
  if (isNaN(cantidad)){
    cantidad=0;
  }
  var cantPies=$("#cantpies").val();
  if (isNaN(cantPies)){
    cantPies=0;
  }
  var costoPie = $("#costoPie").val();
  costoPie = parseInt(costoPie);
  if (isNaN(costoPie)){
    costoPie=0;
  }
  var montoTotal = cantPies*costoPie;
  var presioUnitario = (cantPies*costoPie)/cantidad;
  $("#costoPie").val(costoPie+".00");
  $("#presioUnitario").val(presioUnitario+".00");
  $("#montoTotal").val(montoTotal+".00");

}*/
</script>
</html> 
