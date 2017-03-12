<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form accept-charset="utf-8" method="POST">
<label>Buscar:</label>
<input type="text" name="busqueda" id="busqueda" value="" placeholder="" maxlength="30" autocomplete="off" onKeyUp="buscar();" />
</form>
<div id="resultadoBusqueda"></div>
</body>
<script src="../../../src/bootstrap/js/jquery.min.js"></script> 
<script>
$(document).ready(function() {
    $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
});

function buscar() {
    var textoBusqueda = $("input#busqueda").val();
 
     if (textoBusqueda != "") {
        $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadoBusqueda").html(mensaje);
         }); 
     } else { 
        $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
        };
};
</script>
</html>