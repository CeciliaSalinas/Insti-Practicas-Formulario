<?php
// Hacer un programa en PHP que reciba estas notas

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

//que indique si el estudiante aprobó o no. 

//Para aprobar, debe tener un promedio mayor o igual a 6, *y además debe tener una nota mínima de 6 en el último parcial.
    //*: "y además" me esta indicando que tengo que combinar dos valores Booleanos, &&=y (verdadero sólo cuando ambas condiciones son verdaderas)

$promedio = ($nota1 + $nota2 + $nota3) / 3;

if($promedio >= 6 && $nota3 >=6 ){
    echo "Apobado";
}
else{
    echo "Desaprobado";
}
echo "Promedio : $promedio";
?>