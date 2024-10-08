<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Valores</title>
</head>
<body>
    <h1>Ingrese 7 valores</h1>
    
    <form method="POST">
        <input type="number" name="valores[]" required><br>
        <input type="number" name="valores[]" required><br>
        <input type="number" name="valores[]" required><br>
        <input type="number" name="valores[]" required><br>
        <input type="number" name="valores[]" required><br>
        <input type="number" name="valores[]" required><br>
        <input type="number" name="valores[]" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger los valores del formulario
        $valores = $_POST['valores'];

        // Calcular la media
        $media = array_sum($valores) / count($valores);

        // Mostrar la media
        echo "<h2>Media: $media</h2>";

        // Mostrar los valores que son mayores que la media
        echo "<h3>Valores superiores a la media:</h3>";
        foreach ($valores as $valor) {
            if ($valor > $media) {
                echo $valor . "<br>";
            }
        }
    }
    ?>
</body>
</html>
