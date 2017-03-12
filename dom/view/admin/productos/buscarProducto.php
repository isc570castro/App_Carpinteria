<?php
//Archivo de conexión a la base de datos
include "../../../../model/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";


//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

  //Selecciona todo de la tabla mmv001 
  //donde el nombre sea igual a $consultaBusqueda, 
  //o el apellido sea igual a $consultaBusqueda, 
  //o $consultaBusqueda sea igual a nombre + (espacio) + apellido
  $sql = mysql_query("SELECT * FROM productos WHERE descripcion like '%$consultaBusqueda%';" , $link) or die(mysql_error());

  //Obtiene la cantidad de filas que hay en la consulta
  $filas = mysql_num_rows($sql);

  //Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
  if ($filas === 0) {
    $mensaje = "<br><br><br><p>No hay ningún registro con este nombre..</p>";
  } else {
    //Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
echo ' 
<div class="row">
  <div class="col-md-10 col-md-offset-1">
  <table class="table">
  <thead>
    <tr class="success">
      <th>Descripción</th>
      <th>Tipo</th>
      <th>Marca</th>
      <th>Proveedor</th> 
      <th>Precio</th>  
    </thead>';
    while ($rows = mysql_fetch_array($sql)){
      $idProveedor=$rows['idProveedor'];
      $sql2 = mysql_query("SELECT nombreProveedor FROM proveedores WHERE idProveedor='$idProveedor';" , $link) or die(mysql_error());
      $rows2=mysql_fetch_array($sql2);
  echo '
  <tbody>
    <tr>
      <td> '.$rows['descripcion'] .'</td>
      <td> '.$rows['tipo'] .'</td>
      <td> '.$rows['marca'] .'</td>
      <td> '.$rows2['nombreProveedor'] .'</td>
      <td> $ '.$rows['precio'] .'</td>
      <td align="center"><a href="editarProductos.php?idProducto='.$rows['idProducto'].'"><span class="glyphicon glyphicon-pencil"></span></a></td>
      <td align="center"><a href="../../../../controller/Productos/bajaProductos.php?idProducto='. $rows['idProducto'] .'"  onclick="return eliminaProducto();"><span class="glyphicon glyphicon-trash"></span></a></td>
      </tr>
     ';
}
echo '
<tbody>
</table>
</div>
</div>
';
  }; //Fin else $filas

};//Fin isset $consultaBusqueda
//Devolvemos el mensaje que tomará jQuery

echo $mensaje;
?>