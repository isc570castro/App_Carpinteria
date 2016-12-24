$("#productos").change(function funcVerificar()
{
    alert('entra');
    var idProducto=$('#productos').val()
    $.get("verificaPrecioProducto.php?idProducto="+idProducto,function(data){
    $('#precio').val(data);
    });
});
