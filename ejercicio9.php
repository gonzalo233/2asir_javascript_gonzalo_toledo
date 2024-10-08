<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar el Mayor Número</title>
</head>
<body>
    <h1>Ingrese 7 Números</h1>
    
    <?php
    // Comprobar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los números del formulario
        $numbers = $_POST['numbers'];

        // Comprobar si se ingresaron exactamente 7 números
        if (count($numbers) == 7) {
            // Convertir los números a un arreglo de enteros
            $numbers = array_map('intval', $numbers);
            
            // Encontrar el mayor número
            $mayor = max($numbers);

            // Mostrar el resultado
            echo "<h2>El mayor número es: $mayor</h2>";
        } else {
            echo "<h2>Por favor, ingrese exactamente 7 números.</h2>";
        }
    } else {
    ?>
    
    <form action="" method="POST">
        <label for="num1">Número 1:</label>
        <input type="number" name="numbers[]" required><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="numbers[]" required><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="numbers[]" required><br>

        <label for="num4">Número 4:</label>
        <input type="number" name="numbers[]" required><br>

        <label for="num5">Número 5:</label>
        <input type="number" name="numbers[]" required><br>

        <label for="num6">Número 6:</label>
        <input type="number" name="numbers[]" required><br>

        <label for="num7">Número 7:</label>
        <input type="number" name="numbers[]" required><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    }
    ?>
</body>
</html>
