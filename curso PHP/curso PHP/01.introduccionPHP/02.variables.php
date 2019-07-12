<?php
// variable numerica
$numero = 5;
echo "esta es una variable numero : $numero<br>";
var_dump($numero);
// variable string
echo "<br><br>";// salto de linea
$palabra = "perro caca";
var_dump($palabra);
echo "la palabra es: $palabra<br>";
echo "<br><br>";


// variable booleana
$booleana = true;
var_dump($booleana);
echo "cuando es verdadera imprime el valor : $booleana<br>";
echo "<br><br>";

$colores = array("rojo","verde","azul");
var_dump($colores);
echo " esto es una variable arreglo: $colores[0]<br>";
//0 es rojo, 1 es verde y azul es 2
echo "<br><br>";

// variable arreglo con propiedades

$verduras = array("verdura1" => "lechuga","verdura 2" => "cebolla");
var_dump($verduras);
echo "esto es una variable arreglo con propiedades: $verduras[verdura1]<br>";
echo "<br><br>";

// variable objeto

$frutas = (object)["fruta1" => "pera", "fruta2" => "manzana"];
var_dump($frutas);
echo "esto es una variable objeto: $frutas->fruta1<br>";
echo "<br><br>";
?>
