<!DOCTYPE>
<html>
<head>
	<!--Se define la ruta a donde se quiere dar el estilo y esto se hace en el encabezado  -->
	<meta charset="utf-8"/> 
	<title>Registro usuario</title>
	<link rel="stylesheet" type="text/css" href="../css/registroUsuario.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../css/diseno.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../css/formularios.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../css/menus.css" media="screen" />
	 <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../src/bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<style type="text/css">
		#registro{
			width: 100%;
		}
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
      <a class="navbar-brand" href="../../index.html">Principal</a>
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
      <li><a href="ubicacion.html"><span class="glyphicon glyphicon-map-marker" aria-hidden="true">&nbsp;</span>Ubicación</a></li>
      <li><a href="about.html"><span class="glyphicon glyphicon-info-sign" aria-hidden="true">&nbsp;</span>Quienes somos</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br><br>
<div class="row">
  <div class="col-md-6 col-md-offset-3 col-xs-11 col-xs-offset-1">
  <form class="frmRegistro" action="../../controller/sesiones/registraUsuario.php" method="POST" enctype="multipart/form-data" name="frmaltaClientes" id="frmRegistro">
  <h1>Registro de usuarios</h1>
  <legend></legend>
      <div class="form-group row">
     <div class="form-group has-feedback">
  <label for="example-search-input" class="col-xs-2 col-md-2 col-form-label">Nombre</label>
   <div class=" col-xs-10 col-md-10">
   <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input class="form-control" type="text" id="nombre" placeholder="Introdusca su nombre" name="nombreUsuario" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+">
  </div> 
</div>
</div>
</div>
    <div class="form-group row">
     <div class="form-group has-feedback">
  <label for="example-search-input" class="col-xs-2 col-md-2 col-form-label">Usuario</label>
   <div class=" col-xs-10 col-md-10">
   <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input class="form-control" type="text" id="usuario" placeholder="Introdusca un usuario" name="usuario" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+">
  </div> 
</div>
</div>
</div>
<div class="form-group row">
<div class="form-group has-feedback">
  <label for="example-search-input" class="col-xs-2 col-md-2 col-form-label">Contraseña</label>
 <div class=" col-xs-10 col-md-10">
    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <input class="form-control" type="password" id="correo" placeholder="Introdusca una contraseña" name="password">
  </div> 
</div>
</div>
</div>
<div class="row">
  <div class="col-md-3 col-md-offset-9 col-xs-3 col-xs-offset-9" ><button type="submit" class="btn btn-primary" id="registrar"> Registrar </button></div>
</div>
 <br>
</form>
</div>
</div>
<br>
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
<script src="../src/bootstrap/js/bootstrap.min.js"></script>
<script src="../src/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../src/bootstrap/js/sb-admin.js"></script>
<script src="../src/bootstrap/js/jquery.min.js"></script> 
<script src="../src/bootstrap/js/bootstrapvalidator.min.js"></script> 
<script src="../src/bootstrap/js/bootstrap.min.js"></script>
<script src="../src/bootstrap/js/sb-admin.js"></script>
<script>
  $(document).ready(function () {
$('#frmRegistro').bootstrapValidator({
   /*feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },*/
    fields: {
        nombreUsuario: {
            validators: {
                stringLength: { min: 1},
                 stringLength: { max: 15 },
                notEmpty: { message:'El campo nombre es obligatorio'}
            }
        },
          usuario: {
            validators: {
                stringLength: { min: 1},
                 stringLength: { max: 15 },
                notEmpty: { message:'El campo usuario es obligatorio'}
            }
        },
         password: {
            validators: {
                notEmpty: { message: 'La contrasea es obligatoria' },
               // emailAddress: { message: 'E-mail no valido' }
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
<script  type='text/javascript'>
  function solonumeros(e){
  key=e.keyCode || e.which;
  teclado=String.fromCharCode(key);
  numeros="0123456789";
  especiales="8-37-37-45"; //array
  teclado_especial=false;
  for(var i in especiales){
    if(key==especiales[i]){
      teclado_especial=true;
    }
  }
  if (numeros.indexOf(teclado)==-1 && !teclado_especial){
    return false;
    alert('Solo números');
  }
}
  </script>
</html>
 
 
</body>
</html>


