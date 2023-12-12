<?php

//¿Como se crean los arreglos en php?

$personas = [ // el arreglo se crea con el simbolo [], el arreglo es una variable global y puede ser accedida desde cualquier parte del codigo
    "Carlos" => 20, //Los arreglos pueden tener cualquier tipo de dato
    "Vladimir" => 21, // el simbolo => es para asignar un valor a una llave
    "Andy" => 28, // la , es para separar los elementos del arreglo
];

var_dump( $personas ); //var_dump es una instrucción que muestra el contenido de una variable

echo "\n";

/*
Salida del programa con var_dumpS

array(3) {
  ["Carlos"]=>
  int(20)
  ["Vladimir"]=>
  int(21)
  ["Andy"]=>
  int(28)
}
*/

// alternativa para no usar var_dump

print_r( $personas ); //print_r es una instrucción que muestra el contenido de una variable

echo "\n";

/* 
Salida del programa con print_r
Array
(
    [Carlos] => 20
    [Vladimir] => 21
    [Andy] => 28
)

*/