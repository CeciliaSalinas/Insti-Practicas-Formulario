<?php

//Hacer un programa en PHP que reciba esos datos y muestre los múltiplos. 
//Por ejemplo, si el usuario ingresa 3 y 5; el programa deberá mostrar los 5 primeros múltiplos de 3: 3 6 9 12 15.

$cantidad = $_GET['cantidad'];
$numero = $_GET['numero'];

for($i= 1; $i <= $cantidad; $i++){
    $multiplo = $i*$numero;
    echo "$multiplo - ";
}