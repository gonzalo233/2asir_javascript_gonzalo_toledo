<?php

/* declarar una matriz con valores numéricos y 
obtener otra matriz en que el primer valor de cada fila 
sea el mayor de la fila original y el segundo valor 
sea el menor de la fila original. Visualizar la nueva matriz */


// -------------- FUNCIONES --------------

function obtenermaximo($array) {
    return max($array);
}

function obtenerminimo($array) {
    return min($array);
}

function crear_matriz($matriz) {
    $nueva_matriz = [];

    for ($i = 0; $i < count($matriz); $i++) {
        $maxvalor = obtenermaximo($matriz[$i]);
        $minvalor = obtenerminimo($matriz[$i]);

        $nueva_matriz[] = [$maxvalor, $minvalor];
    }

    return $nueva_matriz;
}

function mostrar_matriz($matriz) {
    foreach ($matriz as $fila) {
        print_r($fila);
        echo "\n";
    }
}

// ----------- PROGRAMA PRINCIPAL -----------

$matriz_original = [
    [2, 5, 78, 23, 10, 96],
    [34, 12, 5, 9, 3, 45],
    [78, 56, 34, 23, 90, 12]
];

$nueva_matriz = crear_matriz($matriz_original);

mostrar_matriz($nueva_matriz);
?>