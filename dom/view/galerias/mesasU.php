<?php
include "../../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
$sql = mysql_query("SELECT * FROM catalogo WHERE categoria='mesas';" , $link) or die(mysql_error());
$sql2 = mysql_query("SELECT * FROM catalogo WHERE categoria='mesas';" , $link) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
  <!--Se define la ruta a donde se quiere dar el estilo y esto se hace en el encabezado  -->
  <meta charset="utf-8"/> 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Catálogo</title>
  <link rel="stylesheet" type="text/css" href="../../css/diseno.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../css/menus.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../css/formularios.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../css/galeriaFotos.css" media="screen" />
  <link href="../../src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../src/bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="../../src/bootstrap/css/sb-admin.css" rel="stylesheet">
  <style>
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
      <a class="navbar-brand" href="../../../inicio.php">Principal</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-picture" aria-hidden="true">&nbsp;</span>Catálogo<span class="caret"></span></a>
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
      <li><a href="../ubicacion.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true">&nbsp;</span>Ubicación</a></li>
      <li><a href="../about.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true">&nbsp;</span>Quienes somos</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <center>
    <div class="fondo">
    <table align="center" width="100%">
      <tr>
    <td colspan="4">
    <div class="row col-md-offset-1 col-xs-offset-1">
    <label class="gsubtitulo2">Catálogo > Categoría > Mesas</label> 
    </div>
    </td>
      <br>
    </tr>
    <tr>
    <td><br>
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
<script src="../../src/bootstrap/js/jquery-1.10.2.js"></script>
<script src="../../src/bootstrap/js/jquery.bsPhotoGallery.js"></script>
<script src="../../src/bootstrap/js/bootstrap.min.js"></script>
<script src="../../src/bootstrap/js/sb-admin.js"></script>
<script src="../../src/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../src/bootstrap/js/sb-admin.js"></script>

</body>
</html>