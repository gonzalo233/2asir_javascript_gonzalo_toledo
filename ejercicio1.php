<?php
function verificarNumeros($num1, $num2) {

    $suma = $num1 + $num2;
    $producto = $num1 * $num2;
    
  
    if ($suma == $num1 || $suma == $num2) {
        echo "La suma de $num1 y $num2 es igual a uno de los números: $suma\n";
    } else {
        echo "La suma de $num1 y $num2 es: $suma\n";
    }


    if ($producto != $num1 && $producto != $num2) {
        echo "El producto de $num1 y $num2 es distinto de los números: $producto\n";
    } else {
        echo "El producto de $num1 y $num2 es: $producto\n";
    }
}

verificarNumeros(2, 2);
echo "\n";
verificarNumeros(3, 5);
?>

