<?php
/* Declarar un array con valores numerios  y obtener otro array en que el primer valor 
   sea el mayor del anterior y el segundo valor que sea el menor del anterior. 
   visualizar este segundo array */

// ---------- FUNCIONES ------------

function obtenerMayorYMenor($numeros) {
    $mayor = max($numeros);
    $menor = min($numeros);
    return array($mayor, $menor);
}

function Visualizar($array) {
    echo "Mayor: " . $array[0] . "<br>";
    echo "Menor: " . $array[1] . "<br>";
}

// ----------- PROGRAMA PRINCIPAL -----------


$tab = array(5, 10, 3, 8, 12, -5);

$resul = obtenerMayorYMenor($tab);
Visualizar($resul);

?>