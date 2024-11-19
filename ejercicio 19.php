<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array de Números Positivos</title>
</head>
<body>
    <h1>Convertir valores de un array a positivos</h1>

    <?php
    // Declarar el array con valores numéricos enteros
    $numeros = [-5, 3, -8, 12, -20, 7, -1];

    echo "<h2>Array original:</h2>";
    echo "<p>" . implode(", ", $numeros) . "</p>";

    // Convertir los valores del array a positivos
    foreach ($numeros as &$valor) {
        $valor = abs($valor); // abs() devuelve el valor absoluto
    }
    unset($valor);

    echo "<h2>Array modificado (todos positivos):</h2>";
    echo "<p>" . implode(", ", $numeros) . "</p>";
    ?>
</body>
</html>
