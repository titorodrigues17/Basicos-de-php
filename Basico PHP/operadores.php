<?php 

//¿Que son los operadores logicos?
// Son los que nos permiten combinar valores booleanos y su resultado tambien es un valor booleano


$perros_caninos = true;
$perros_felinos = false;
$perros_4_patas = true;
$perros_2_patas = false;
$perros_programan_con_php = true;

//And

var_dump($perros_caninos AND $perros_felinos); // Salida del programa: bool(false) ❌
echo "\n";

var_dump($perros_caninos && $perros_4_patas); // Salida del programa: bool(true) ✅
echo "\n";

var_dump($perros_caninos AND $perros_programan_con_php); // Salida del programa: bool(true) ✅
echo "\n";

//Or 

var_dump($perros_caninos OR $perros_felinos); // Salida del programa: bool(true) ✅
echo "\n";

var_dump($perros_caninos || $perros_2_patas); // Salida del programa: bool(true) ✅
echo "\n";

var_dump($perros_felinos OR $perros_2_patas); // Salida del programa: bool(false) ❌
echo "\n";

//Not

var_dump(!$perros_caninos); // Salida del programa: bool(false) ❌
echo "\n";

var_dump(!$perros_felinos); // Salida del programa: bool(true) ✅
echo "\n";



/*
  ¿Que son los operadores aritmeticos?
    Son los que nos permiten realizar operaciones matematicas entre dos valores y su resultado es un valor numerico
*/

//Suma
$numero_1 = 10;
$numero_2 = 20;

$resultado = $numero_1 + $numero_2;
var_dump($resultado); // Salida del programa: int(30) ✅
echo "\n";

//Resta
$resultado = $numero_1 - $numero_2;
var_dump($resultado); // Salida del programa: int(-10) ✅
echo "\n";

//Multiplicacion
$resultado = $numero_1 * $numero_2;
var_dump($resultado); // Salida del programa: int(200) ✅
echo "\n";

//Division
$resultado = $numero_1 / $numero_2;
var_dump($resultado); // Salida del programa: float(0.5) ✅
echo "\n";

//Modulo
$resultado = $numero_1 % $numero_2;
var_dump($resultado); // Salida del programa: int(10) ✅
echo "\n";

//Exponenciacion
$resultado = $numero_1 ** $numero_2;
var_dump($resultado); // Salida del programa: int(100000000000000000000) ✅
echo "\n";

//Incremento
$numero_1++;
var_dump($numero_1); // Salida del programa: int(11) ✅
echo "\n";

//Decremento
$numero_1--;
var_dump($numero_1); // Salida del programa: int(10) ✅
echo "\n";

//Operadores de comparacion
//Son los que nos permiten comparar dos valores y su resultado es un valor booleano

$numero_1 = 10;
$numero_2 = 20;
$numero_2--;
$numero_3 = 10;
$numero_3--;

//Igualdad
var_dump($numero_1 == $numero_2); // Salida del programa: bool(false) ❌
echo "\n";

var_dump($numero_1 == $numero_3); // Salida del programa: bool(true) ✅
echo "\n";

//Desigualdad
var_dump($numero_1 != $numero_2); // Salida del programa: bool(true) ✅
echo "\n";

var_dump($numero_1 != $numero_3); // Salida del programa: bool(false) ❌
echo "\n";

//Identico
var_dump($numero_1 === $numero_2); // Salida del programa: bool(false) ❌
echo "\n";

var_dump($numero_1 === $numero_3); // Salida del programa: bool(true) ✅
echo "\n";

//No identico
var_dump($numero_1 !== $numero_2); // Salida del programa: bool(true) ✅
echo "\n";

var_dump($numero_1 !== $numero_3); // Salida del programa: bool(false) ❌
echo "\n";

//Mayor que
var_dump($numero_1 > $numero_2); // Salida del programa: bool(false) ❌
echo "\n";
var_dump($numero_1 > $numero_3);
echo "\n";

//Menor que
var_dump($numero_1 < $numero_2); // Salida del programa: bool(true) ✅
echo "\n";
var_dump($numero_1 < $numero_3); // Salida del programa: bool(false) ❌
echo "\n";

//Mayor o igual que
var_dump($numero_1 >= $numero_2); // Salida del programa: bool(false) ❌
echo "\n";
var_dump($numero_1 >= $numero_3); // Salida del programa: bool(true) ✅
echo "\n";

//Menor o igual que
var_dump($numero_1 <= $numero_2); // Salida del programa: bool(true) ✅
echo "\n";

var_dump($numero_1 <= $numero_3); // Salida del programa: bool(true) ✅
echo "\n";

//Operadores de asignacion
//Son los que nos permiten asignar un valor a una variable

$numero_1 = 10;
$numero_2 = 20;
var_dump($numero_1 <= $numero_2); // Salida del programa: bool(true) ✅
echo "\n";

//Asignacion
$numero_1 = $numero_2;
var_dump($numero_1); // Salida del programa: int(20) ✅
echo "\n";

//Suma y asignacion
$numero_1 += $numero_2;
var_dump($numero_1); // Salida del programa: int(40) ✅
echo "\n";

//Resta y asignacion
$numero_1 -= $numero_2;
var_dump($numero_1); // Salida del programa: int(20) ✅
echo "\n";

//Multiplicacion y asignacion
$numero_1 *= $numero_2;
var_dump($numero_1); // Salida del programa: int(400) ✅
echo "\n";



