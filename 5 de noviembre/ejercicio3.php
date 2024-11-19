<!DOCTYPE html>
<html lang="es">
<head>
    <title>Lluvia en Localidades</title>
</head>
<body>
    <h1>Lluvia en Chiclana, San Fernando y Cádiz</h1>

    <?php
    $lluvia = [
        [10, 5, 0, 20, 15], 
        [0, 10, 5, 0, 20],  
        [5, 5, 10, 0, 10]  
    ];

    $dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];

    $max_lluvia = 0;
    $dia_max = "";

    for ($i = 0; $i < 5; $i++) {
        $total_lluvia = $lluvia[0][$i] + $lluvia[1][$i] + $lluvia[2][$i];
        if ($total_lluvia > $max_lluvia) {
            $max_lluvia = $total_lluvia;
            $dia_max = $dias[$i];
        }
    }

    $ciudad_min = "";
    $min_lluvia = PHP_INT_MAX;

    $ciudades = ["Chiclana", "San Fernando", "Cádiz"];

    for ($j = 0; $j < 3; $j++) {
        $total_ciudad = array_sum($lluvia[$j]);
        if ($total_ciudad < $min_lluvia) {
            $min_lluvia = $total_ciudad;
            $ciudad_min = $ciudades[$j];
        }
    }
    ?>

    <h2>Día con más lluvia: <?php echo $dia_max; ?> (<?php echo $max_lluvia; ?> litros)</h2>
    <h2>Ciudad con menos lluvia: <?php echo $ciudad_min; ?> (<?php echo $min_lluvia; ?> litros)</h2>
</body>
</html>
