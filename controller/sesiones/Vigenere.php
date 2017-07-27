<?php
class Vigenere {
var $charset;
var $txt;
var $seed;

public function __construct($s, $seed) {
$this->charset = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";  //Definicion del charset
$this->txt    = strtoupper($s);
$this->seed   = strtoupper($seed);
}

function encode(){
$result = "";                                           //Cadena donde queda el resultado
$x = 0;                                                         //Indice de la semilla
$p = 0;                                                         //Posicion para relizar la operacion modular
for($i=0; $i<strlen($this->txt); $i++){
if(strstr($this->charset, $this->txt{$i})){//Evaluo si existe el caracter en el charset
$x = strpos($this->charset, $this->seed{($p % strlen($this->seed))});
$result .= $this->rotate($this->txt{$i}, $x);   //Invoco funcion que hace la rotacion
$p++; //Aumento el indice para la operacion modular
}else{//Si no existe dejo el caracter evaluado
$result .= $this->txt{$i};
continue;
}
}
return $result;                                         //Devuelvo la cadena Cifrada =)
}

function decode(){
$result = "";                                           //Cadena donde queda el resultado
$x = 0;                                                         //Indice de la semilla
$p = 0;                                                         //Posicion para relizar la operacion modular
for($i=0; $i<strlen($this->txt); $i++){
if(strstr($this->charset, $this->txt{$i})){//Evaluo si existe el caracter en el charset
$x = strpos($this->charset, $this->seed{($p % strlen($this->seed))});
$result .= $this->rotate($this->txt{$i}, -$x);  //Invoco funcion que hace la rotacion
$p++; //Aumento el indice para la operacion modular
}else{//Si no existe dejo el caracter evaluado
$result .= $this->txt{$i};
continue;
}
}
return $result;                                         //Devuelvo la cadena DesCifrada =)
}

function rotate($c, $n){
$result = "";                   //Texto de salida
$tamC = strlen($this->charset); //Longitud de la cadena del charset
$k = 0;                                 //Indice para sustitucion de la cadena con el charset
$n %= $tamC;                    //Semilla ó rotacion
$c = strtoupper($c);    //Convierto a mayuscula el caracter
//Realizo la sustitución de cada caracter
//Evaluo si el caracter en la posicion $i existe, de lo contrario
//Dejo el caracter que esta por defecto
if(strstr($this->charset, $c)){
$k = (strpos($this->charset, $c) + $n);
if($k < 0){
$k += $tamC;
}else
$k %= $tamC;
$result .= $this->charset{$k};
}else{
$result .= $c;
}
return $result;
}
}
?>