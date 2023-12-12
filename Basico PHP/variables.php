<?php

//¿Como se crean las variables en php?

$numero_1 = 8; //Las variables se declaran con el simbolo $ y no es necesario declarar el tipo de datoS
$numero_2 = 9; // El simbolo = es para asignar un valor a una variable


echo $numero_1 + $numero_2 ;  // salida del programa : 17
echo "\n";

//¿Como se crean las constantes en php?

define("NUMERO_PI", 3.1416);// define es una instrucción que crea una constante, las constantes no pueden cambiar su valor
// primero viene el nombre de la constantes y procedido de una , viene su valor 

echo NUMERO_PI;  // salida del programa 3.1416

echo "\n";

//NUMERO_PI = 2 ❌ esto es erroneo ya que una constante no se le puede modificar su valor



