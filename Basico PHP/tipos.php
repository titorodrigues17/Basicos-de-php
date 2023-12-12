<?php

/* Tipos de datos

⭕ Numericos
   ➖Interger  --> Entero
   ➖Float     --> Decimal
   ➖Double    --> Decimal

⭕ Cadenas de caracteres
   ➖Char   --> caracteres
   ➖String --> cadena de caracteres

⭕ Booleanos
   ➖Bool   --> Verdadero o falso 

⭕ Sin valor 
   ➖Null        --> No hay valor
   ➖Undefined   --> Vacio

   
*/

$numero = 10;
var_dump($numero); // Salida del programa: int(10)
echo "\n"; 

$decimal = 10.5;
var_dump($decimal); // Salida del programa: float(10.5)
echo "\n";

$decimal2 = 10.87512;
var_dump($decimal2); // Salida del programa: double(10.87512)
echo "\n";

$char = 'a';
var_dump($char); // Salida del programa: string(1) "a"
echo "\n";

$cadena = "Hola mundo";
var_dump($cadena); // Salida del programa: string(10) "Hola mundo"
echo "\n";

$verdadero = true;
var_dump($verdadero); // Salida del programa: bool(true)
echo "\n";

$falso = false;
var_dump($falso); // Salida del programa: bool(false)
echo "\n";

$nulo = null;
var_dump($nulo); // Salida del programa: NULL
echo "\n";

$sinValor;
var_dump($sinValor); // Salida del programa: Undefined 
echo "\n";





