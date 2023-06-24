<?php
//Hacer un programa PHP que muestre los primeros n términos de la sucesión de Fibonacci. Recordatorio: La sucesión de Fibonacci es aquella en la que sus dos primeros elementos son el 1, y luego cada elemento subsiguiente es la suma de los dos anteriores: 1,1,2,3,5,8,13,21.

$n= $_GET['n'];            

//Mostramos los dos primeros elementos de la sucesión:
$mostrar =  "1 - 1 - ";

//Guardamos el último y el penúltimo de los valores mostrados:
$penultimo = 1;
$ultimo = 1;

for ($i=2; $i < $n; $i++) {
    //Calculamos el próximo número a mostrar:
    $numero_actual = $ultimo + $penultimo;
    $mostrar .= "$numero_actual - ";

    //Actualizamos último y penúltimo:
    $penultimo = $ultimo;
    $ultimo = $numero_actual;
}

// Eliminamos el último '-' de la cadena a mostrar:
$mostrar = trim($mostrar, ' - ');

echo $mostrar;