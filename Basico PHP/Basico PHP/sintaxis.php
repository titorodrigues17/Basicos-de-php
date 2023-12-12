<?php
//Sintaxis básica

//echo es una instrucción que muestra una o más cadenas
echo "Hola Mundo";  //echo debe acabar siempre en cada instrucción con ;

//¿Como hago un salto de linea en la consola con php?

echo "Hola Carlos \n  Como estas"; // \n es un salto de linea en la consola

//¿Como hago un salto de linea en el navegador con php?

echo "Hola Carlos <br> Como estas"; // <br> es un salto de linea en el navegador 

//Variables

$nombre = "Carlos"; //Las variables se declaran con el simbolo $ y no es necesario declarar el tipo de dato
$apellido = "Santos";

echo "Hola $nombre $apellido"; //Las variables se pueden imprimir dentro de las cadenas

//¿Como se concatenan las cadenas?

echo "Hola ".$nombre." ".$apellido; //Se concatenan con el simbolo .


//¿Como se concatenan las cadenas con numeros?

echo "El resultado de 4 x 5 es: ". (4 * 5) . "\n"; //Se concatenan con el simbolo . y se pueden hacer operaciones dentro de las cadenas



