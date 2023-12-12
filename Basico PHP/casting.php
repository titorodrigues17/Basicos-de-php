<?php
/*¿Que es el casting?
    Es la conversion de un tipo de dato a otro
*/

 $numero = "10";
 var_dump($numero); // Salida del programa: string(2) "10"
 echo "\n";

 $numero = (int) $numero; // Casting de string a int 
 var_dump($numero); // Salida del programa: int(10)
 echo "\n";

 /*
    int = entero
    float = decimal
    double = decimal
    string = cadena de caracteres
    bool = verdadero o falso
    null = no hay valor
    undefined = vacio
 */

 $cadena = 10;
 var_dump($cadena); // Salida del programa: int(10)
    echo "\n";

$cadena = (string) $cadena; // Casting de int a string
var_dump($cadena); // Salida del programa: string(2) "10"
echo "\n";

$cadena = 10;
var_dump($cadena); // Salida del programa: int(10)
   echo "\n";

$cadena = (bool) $cadena; // Casting de int a bool
var_dump($cadena); // Salida del programa: bool(true)
echo "\n";

