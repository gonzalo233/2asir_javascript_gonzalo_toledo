<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número de alumnos por nivel e idioma</title>
</head>
<body>
    <h1>Número de alumnos por nivel e idioma</h1>

    <?php

// ------------ PROGRAMA PRINCIPAL -----------------

// Array asociativo
    $numeroAlumnos = array(
        'basico' => array(
            'ingles' => 1,
            'frances' => 14
        ),
        'intermedio' => array(
            'ingles' => 7,
            'frances' => 8,
            'aleman' => 3
        ),
        'avanzado' => array(
            'ingles' => 10,
            'frances' => 5,
            'aleman' => 2
        )
    );

// ---------------- FUNCIONES -------------
 
    // Recorremos el array
    foreach ($numeroAlumnos as $nivel => $idiomas) {
        foreach ($idiomas as $idioma => $cantidad) {
            echo "<p>En el nivel <b>$nivel</b>, idioma <b>$idioma</b>, hay <b>$cantidad</b> alumno(s).</p>";
        }
    }
    ?>
</body>
</html>