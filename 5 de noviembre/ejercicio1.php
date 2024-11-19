<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de Palabras</title>
</head>
<body>
    <h1>Ejercicio: Iniciales de Palabras</h1>

    <?php
    $palabras = ["manzana", "banana", "cereza", "durazno", "fresa"];

    $iniciales_original = '';
    for ($i = 0; $i < count($palabras); $i++) {
        $iniciales_original .= strtoupper($palabras[$i][0]); // Obtener la inicial y convertirla a mayúscula
    }

    sort($palabras);

    $iniciales_ordenadas = '';
    for ($i = 0; $i < count($palabras); $i++) {
        $iniciales_ordenadas .= strtoupper($palabras[$i][0]); // Obtener la inicial y convertirla a mayúscula
    }
    ?>

    <h2>Resultados</h2>
    <p><strong>Iniciales del array original:</strong> <?php echo $iniciales_original; ?></p>
    <p><strong>Iniciales del array ordenado:</strong> <?php echo $iniciales_ordenadas; ?></p>
</body>
</html>
