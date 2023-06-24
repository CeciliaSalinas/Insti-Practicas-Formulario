<?php
//Hacer un programa en PHP que reciba esos números y los muestre ordenados de mayor a menor.
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

//si num1 es mayor
if ($num1 > $num2 && $num1 > $num3){
    if( $num2 > $num3) {
       echo $num1, $num2, $num3;
    }
    else{
        echo $num1, $num3, $num2;
    }
}
//si el num2 es mayor
else if ($num2 > $num3){
    if($num1 >$num3) {
        echo $num2, $num1, $num3;
    }
    else{
        echo $num2, $num3, $num1;
    }
}

//num3 mayor
else {
    if($num1 > $num2){
        echo $num3, $num1, $num2;
    }
    else{
        echo $num3, $num2, $num1;
    }
}
?>
