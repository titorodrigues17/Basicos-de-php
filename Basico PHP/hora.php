<?php

$segundos = readline("Ingrese el tiempo en segundos: ");  // el metodo readline() nos permite leer lo que el usuario ingresa por teclado
echo $segundos ;
echo "\n";

$horas = (int) ($segundos / 3600);
$segundos = (int) ($segundos % 3600) ;
$minutos = (int) ($segundos / 60);
$segundos = (int)($segundos % 60) ;

echo $horas . " horas " . $segundos . " segundos " . $minutos . " minutos " . "\n";

?>

<?php

//Reto 

$horas = readline("Ingrese las horas: ");
$minutos = readline("Ingrese los minutos: ");
$segundos = readline("Ingrese los segundos: ");

$horas = (int) ($horas * 3600);
$minutos = (int) ($minutos * 60);
$segundos = (int) ($segundos);

$tiempo = $horas + $minutos + $segundos;

echo $tiempo . " segundos " . "\n";
?>
