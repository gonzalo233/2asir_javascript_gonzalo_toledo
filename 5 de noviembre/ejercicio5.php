<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio: Comparación de Arrays</h1>

    <?php
    $tab1 = [3, 0, 0, 0, 7, 1, 5, 2];
    $tab2 = [2, 4, 0, 0, 0, 3, 1, 8];

    function obtenerMayor($array) {
        $mayor = $array[0];
        foreach ($array as $num) {
            if ($num > $mayor) {
                $mayor = $num;
            }
        }
        return $mayor;
    }

    function hayTresCerosSeguidos($array) {
        for ($i = 0; $i < count($array) - 2; $i++) {
            if ($array[$i] === 0 && $array[$i + 1] === 0 && $array[$i + 2] === 0) {
                return true;
            }
        }
        return false;
    }

    $mayorTab1 = obtenerMayor($tab1);
    $mayorTab2 = obtenerMayor($tab2);
    ?>

    <p>Mayor de tab1: <?php echo $mayorTab1; ?></p>
    <p>Mayor de tab2: <?php echo $mayorTab2; ?></p>
    
    <?php
    echo hayTresCerosSeguidos($tab1) ? "<p>En tab1 hay tres ceros seguidos.</p>" : "<p>En tab1 no hay tres ceros seguidos.</p>";
    echo hayTresCerosSeguidos($tab2) ? "<p>En tab2 hay tres ceros seguidos.</p>" : "<p>En tab2 no hay tres ceros seguidos.</p>";
    ?>
</body>
</html>
