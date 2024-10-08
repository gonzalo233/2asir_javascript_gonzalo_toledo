<<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Suma o Resta</title>
</head>
<body>
    <h2>Calculadora: Suma o Resta</h2>
    
    <form method="post">
        <input type="number" name="numero1" placeholder="Número 1" required><br><br>
        <input type="number" name="numero2" placeholder="Número 2" required><br><br>

        <input type="radio" name="operacion" value="suma" required> Suma<br>
        <input type="radio" name="operacion" value="resta"> Resta<br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

     
        if ($operacion == 'suma') {
            $resultado = $numero1 + $numero2;
            echo "<h3>El resultado de la suma es: $resultado</h3>";
        } else {
            $resultado = $numero1 - $numero2;
            echo "<h3>El resultado de la resta es: $resultado</h3>";
        }
    }
    ?>
</body>
</html>
