<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dado 7 valores</title>
</head>
<body>
    Dado 5 números utilizar 4 checkbox
    <form method="POST" action="">
        <input type="number" name="valor1" required>
        <input type="number" name="valor2" required>
        <input type="number" name="valor3" required>
        <input type="number" name="valor4" required>
        <input type="number" name="valor5" required> <br>
        <input type="checkbox" name="check1"> Sumar
        <input type="checkbox" name="check2"> Restar
        <input type="checkbox" name="check3"> Multiplicar
        <input type="checkbox" name="check4"> Dividir <br>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>
<?php
// ---------- FUNCIONES ---------
if (isset($_POST['check1'])) {
    $suma = $_POST['valor1'] + $_POST['valor2'] + $_POST['valor3'] + $_POST['valor4'] + $_POST['valor5'];
    echo "La suma es: " . $suma . "<br>";
}
if (isset($_POST['check2'])) {
    $resta = $_POST['valor1'] - $_POST['valor2'] - $_POST['valor3'] - $_POST['valor4'] - $_POST['valor5'];
    echo "La resta es: " . $resta . "<br>";
}
if (isset($_POST['check3'])) {
    $multiplicacion = $_POST['valor1'] * $_POST['valor2'] * $_POST['valor3'] * $_POST['valor4'] * $_POST['valor5'];
    echo "La multiplicación es: " . $multiplicacion . "<br>";
}
if (isset($_POST['check4'])) {
        $division = $_POST['valor1'] / $_POST['valor2'] / $_POST['valor3'] / $_POST['valor4'] / $_POST['valor5'];
        echo "La división es: " . $division . "<br>";
}
?>
