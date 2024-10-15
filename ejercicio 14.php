<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lluvia en Localidades</title>
</head>
<body>

    <?php
    // Arrays con localidades y la cantidad de lluvia
    $localidades = array("Chiclana", "Jerez", "Cádiz", "San Fernando");
    $lluvia = array(12, 30, 20, 15);

    // Generar el mensaje
    for ($i = 0; $i < count($localidades); $i++) {
        echo "<p>Ayer en " . $localidades[$i] . " llovió " . $lluvia[$i] . " litros.</p>";
    }
    ?>

</body>
</html>