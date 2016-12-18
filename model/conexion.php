<?php
error_reporting(E_ALL ^ E_DEPRECATED);
Class Conexion{

function conectarse(){
							//("IP o servidor","usuario","contraseña")
   // if (!($link=mysql_connect("localhost","u680532103_root","admin123"))) 
   if (!($link=mysql_connect("localhost","root",""))) 
	{
		echo "Error en la conexion.";
		exit();
	}
	//if (!mysql_select_db("u680532103_carp",$link)) 
    if (!mysql_select_db("carpinteria",$link))
	{
		echo "Error seleccionando la base de datos.";
		exit();
	}
	return $link;
}
//Funcion para traer todos los compos de una tabla en la DB
public function getColumns($tabla) {
        $fieldnames = array();

        $x = new Conexion();
        $conn = $x->conectarse();

        $result = mysql_query("SHOW COLUMNS FROM " . $tabla, $conn);


        if (!$result) {
            echo 'No se pudo ejecutar la consulta : ' . mysql_error();
            return false;
        }

        if (mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                /**QUITAR ESTA VALIDACION PARA SISTEMAS DIFERENTES A SICU*/
                if($row['Field']!=="oncreate"){
                    $fieldnames[] = $row['Field'];
                }
            }
        }
        $x->liberaRecurso($result);
        //$x->desconectarse($conn);
        return $fieldnames;
    }


public static function liberaRecurso($res) {
        mysql_free_result($res);
    }

    
}//class Conexion
?>