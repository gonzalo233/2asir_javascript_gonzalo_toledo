<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar el Mayor Valor</title>
</head>
<body>
    <h1>Encontrar el Mayor Valor en un Array</h1>

    <form method="POST">
        <label for="numeros">Introduce 7 números separados por comas:</label><br>
        <input type="text" id="numeros" name="numeros" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la entrada del formulario
        $entrada = $_POST['numeros'];

        // Convertir la cadena de entrada en un array
        $valores = array_map('trim', explode(',', $entrada));

        // Verificar que se hayan introducido 7 números
        if (count($valores) === 7) {
            // Convertir los valores a enteros
            $valores = array_map('intval', $valores);
            
            // Obtener el mayor valor del array
            $mayorValor = max($valores);
            ?>

            <p>Los valores del array son: <?php echo implode(", ", $valores); ?></p>
            <p>El mayor valor es: <strong><?php echo $mayorValor; ?></strong></p>

            <?php
        } else {
            echo "<p style='color:red;'>Por favor, introduce exactamente 7 números.</p>";
        }
    }
    ?>
</body>
</html>
