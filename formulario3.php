<?php
//Hacer un programa en PHP que muestre el máximo, el mínimo, la suma y el promedio de los números ingresados.

//numero maximo - numero minimo
//la suma de esos numeros ingresados
//promedio de los numeros ingresados

$nums = $_POST['numeros'];

//elimino espacios en blanco
//str_replace:reemplaza todas las apariciones de la cadena de búsqueda con la cadena de reemplazo
                //palabra a buscar,por cual remplazo, donde la quiero poner
$nums = str_replace (' ','',$nums);

//elimino comas al principio y al final
//trim — Elimina espacio en blanco (u otro tipo de caracteres) del inicio y el final de la cadena
$nums = trim($nums, ',');

//agregar coma al final
$nums = $nums. ',';

//inicializar
$cantidad = 0;
$num_max = -1;
$num_min = PHP_INT_MAX; //es el mayor entero que se puede guardar en una variable de tipo entero.
$suma = 0;
$numero = '';

//calculamos la cantidad
//strlen — Obtiene la longitud de un string
//for: son bucles 
//for (expr1; expr2; expr3)
    //sentencia
for ($i= 0; $i < strlen($nums); $i++){
    if($nums[$i] == ',' && strlen($numero) > 0){
        //incrementamos acumulador y contador.
        $suma += $numero;
        $cantidad++;
   
    //evaluamos maximo y minimo
    if($numero > $num_max){
        $num_max = $numero;
    }
    if($numero < $num_min){
        $num_min = $numero;
    }
    $numero ='';
}
    else if (is_numeric($nums[$i])){
        $numero = $numero . $nums[$i];
    }
}
$promedio = $suma / $cantidad;
echo "La suma es $suma, el promedio es $promedio, el máximo es $num_max y el mínimo es $num_min";
    