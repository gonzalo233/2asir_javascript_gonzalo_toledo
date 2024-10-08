<?php
if(!isset($_POST['enviar'])){ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par o Impar</title>
</head>
<body>

    <h2>Comprobar si un número es Par o Impar</h2>

    <form method="post" action="ejercicio5.php" name="form1">
        <label>Número:</label>
        <input type="number" name="numero" required><br><br>

        <input type="submit" value="Comprobar">
    </form>

    <?php
    //dado un solo numero visualizar si es par o impar 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        if ($numero % 2 == 0) {
            echo "<h3>El número $numero es Par</h3>";
        } else {
            echo "<h3>El número $numero es Impar</h3>";
        }
    }
}
    ?>

</body>
</html>





