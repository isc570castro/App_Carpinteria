<?php
session_start();
$seguridad = $_SESSION['seguridad'];
if (!isset($seguridad)){
echo  "<script type='text/javascript'>
    alert('Debes loguearte para poder ingresar al catálogo');
    </script>";
header ('Location:../../../index.html');
}
?>
<!DOCTYPE html>
<html>
<head>
  <!--Se define la ruta a donde se quiere dar el estilo y esto se hace en el encabezado  -->
  <meta charset="utf-8"/> 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <title>Catálogo</title>
  <link rel="stylesheet" type="text/css" href="../../css/diseno.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../css/diseno.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../css/sesion.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../css/formularios.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../css/menus.css" media="screen" />
  <link href="../../src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../src/bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="../../bootstrap/css/sb-admin.css" rel="stylesheet">
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
  #divfoto{
    height: 2px;  }
  #divfoto1{
   
  }
  #registrar{
    width: 100%;
  }
  #galeria{
    background-color: white;
  }
  </style>
</head>
<body id="galeria">
<center>
<div class="row">
<div class="superior">
<img class="logo" src="../../imagenes/LOGO2.png">
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
      <a class="navbar-brand" href="../admin/menuadmin.php">Menú de control</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-picture" aria-hidden="true">&nbsp; </span>Catálogo<span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a href="cocinas.php">Cocinas integrales</a></li>
          <li><a href="closets.php">Closets</a></li>
          <li><a href="camas.php">Camas</a></li>
          <li><a href="mesas.php">Mesas</a></li>
          <li><a href="buros.php">Buros</a></li>
          <li><a href="escritorios.php">Escritorios</a></li>
           <li><a href="puertas.php">Puertas</a></li>
          <li><a href="marcos.php">Marcos</a></li>
           <li><a href="otros.php">Otros</a></li>
          </ul>
        </li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" glyphicon glyphicon-file><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;</span>Consultar</span><span class="caret"></a>
          <ul class="dropdown-menu">
             <li><a href="../admin/clientes/showClientes.php">Clientes</a></li>
             <li><a href="../admin/proveedores/showProveedores.php">Proveedores</a></li>
             <li><a href="../admin/productos/showProductos.php">Productos</a></li>
             <li><a href="../admin/presupuestos/showPresupuestos.php">Presupuesto</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" glyphicon glyphicon-file><span class="glyphicon glyphicon-plus-sign" aria-hidden="true">&nbsp;</span>Nuevo</span><span class="caret"></a>
          <ul class="dropdown-menu">
             <li><a href="../admin/clientes/altaClientes.php">Cliente</a></li>
             <li><a href="../admin/proveedores/altaProveedores.php">Proveedor</a></li>
             <li><a href="../admin/productos/altaProductos.php">Producto</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-file" aria-hidden="true">&nbsp; </span>Generar<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="subirFoto.php">Abono</a></li>
          <li><a href="../admin/presupuestos/generaPresupuesto.php">Presupuesto</a></li>
          <li><a href="../admin/Ventas/venta.php">Venta</a></li>
          <li><a href="../admin/Ventas/reporte.php">Reporte de ventas</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true">&nbsp; </span>Cuentas</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
       <a href="../../../controller/sesiones/logout.php"<li><button type="button" id="btnlogin" class="btn btn-primary btn-lg"> Logout &nbsp;<span class="glyphicon glyphicon-log-out" aria-hidden="true"> </span></button></a>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</nav>
<br><br><br>
<div class="row">
  <div class="col-md-11 col-md-offset-1 col-xs-11 col-xs-offset-1">
  <form class="frmRegistro" action="subir.php" method="POST" enctype="multipart/form-data" name="frmaltaClientes" id="frmRegistro" enctype="multipart/form-data">
  <h1>Catálogo</h1>
  <legend></legend>
    <legend><font size="5"> Subir foto: </font></legend>
      <div class="form-group row">
     <div class="form-group has-feedback">
  <label for="example-search-input" class="col-xs-2 col-md-1 col-form-label">Categoria</label>
   <div class=" col-md-11">
   <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
    <select class="form-control" id="categoria" name="categoria">
   <option selected="selected" value="">Selecciona una categoria...</option>
      <option value="cocinas" >Cosinas Integrales</option>
      <option value="camas">Camas</option>
      <option value="closets">Closets</option>
      <option value="mesas">Mesas</option>
      <option value="buros">Buros</option>
      <option value="escritorios">Escritorios</option>
      <option value="puertas">Puertas</option>
      <option value="marcos">Cuadros</option>
       <option value="otros">Otros</option>
   </select> 
  </div>
</div>
</div>
</div>
<div class="form-group row">
  <div class="form-group has-feedback">
   <div class=" col-md-9 col-md-offset-1 col-xs-9 " id="divfoto">
   <div class="input-group" id="divfoto1"> <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
   <input type="file" name="imagen" id="imagen" class="filestyle" data-input="false" required value="">
  </div>
  </div>
  <div class="col-md-2 col-xs-3 "><button type="submit" class="btn btn-primary" id="registrar"> Subir </button></div>
</div>
</div>

</form>
</div>
</div>
   <div class="row">
    <div class="col-md-offset-1 col-md-10 col-xs-offset-1 col-xs-12 ">
   <?php $i=1; while ($imagenes = @mysql_fetch_array($sql) ){ 
   $ruta = "imagenes/" . $imagenes['imagen'];
   ?>  
  <div class="col-md-3 col-xs-10">
    <img src="<?php echo $ruta;?>" style="width:100%" onClick="openModal();currentSlide(<?php echo $i; ?>)" class="hover-shadow cursor">
  </div>
  <?php
  $i++; 
  }
  ?>
  </div>
  </div>
</div>
 <div id="myModal" class="modal">
  <span class="close cursor" onClick="closeModal()">&times;</span>
  <div class="modal-content">
  <?php  $j=1; while ($imagenes = @mysql_fetch_array($sql2) ){
   
   $ruta = "imagenes/" . $imagenes['imagen'];
   ?>  
    <div class="mySlides">
      <div class="numbertext"><?php echo $j;?></div>
      <img src="<?php echo $ruta;?>" style="width:100%" >
    </div>

  <?php
  $j=$j+1;
   }?>
   </div>
    <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
    <a class="next" onClick="plusSlides(1)">&#10095;</a>
 </div>
 </td></tr></table>
   </div>
 </div>
 </div>
 <script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}</script>
<script src="../../src/bootstrap/js/bootstrap.min.js"></script>
<script src="../../src/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../src/bootstrap/js/sb-admin.js"></script>
<script src="../../src/bootstrap/js/jquery.min.js"></script> 
<script src="../../src/bootstrap/js/bootstrapvalidator.min.js"></script> 
<script src="../../src/bootstrap/js/bootstrap.min.js"></script>
<script src="../../src/bootstrap/js/sb-admin.js"></script>
<script src="../../src/bootstrap/js/bootstrap-filestyle.min.js"></script>

<script>
  $(document).ready(function () {
$('#frmRegistro').bootstrapValidator({
   /*feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },*/
    fields: {
        categoria: {
            validators: {
                notEmpty: { message:'Debe seleccionar una marca'}
            }
        },
         imagen: {
            validators: {
                notEmpty: { message:'Debe seleccionar una foto'}
            }
        },
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
<script type="text/javascript">
$(":file").filestyle();
$(":file").filestyle({input: false});</script>
</html>
 