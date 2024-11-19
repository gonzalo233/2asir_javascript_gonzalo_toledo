<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de Números</title>
</head>
<body>
    <h1>Ejercicio: Verificar Números Pares</h1>

    <?php
    $numeros = [25, 30, 31, 34, 36, 39, 41, 40, 29, 38];

    function verificarNumerosPares($array) {
        $contador = 0; 

        foreach ($array as $numero) {
            if ($numero >= 30 && $numero <= 40 && $numero % 2 == 0) {
                $contador++;
            }
        }

        return $contador >= 2 ? "si" : "no";
    }

    function mostrarMensaje($existe) {
        if ($existe === "si") {
            echo "<p>Si existe al menos dos números pares entre 30 y 40.</p>";
        } else {
            echo "<p>No existe al menos dos números pares entre 30 y 40.</p>";
        }
    }

    $resultado = verificarNumerosPares($numeros);

    mostrarMensaje($resultado);
    ?>
</body>
</html>
