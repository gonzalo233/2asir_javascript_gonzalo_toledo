<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmar'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $localidad = htmlspecialchars($_POST['localidad']);
} else {
    header('Location: programa.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
</head>
<body>
    <h1>Datos Confirmados</h1>
    <p>Tu nombre es: <strong><?php echo $nombre; ?></strong></p>
    <p>Tu localidad es: <strong><?php echo $localidad; ?></strong></p>
</body>
</html>
