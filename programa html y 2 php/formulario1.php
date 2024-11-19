<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    <title>Resumen de Datos</title>
</head>
<body>
    <h1>Resumen de tus datos</h1>
    <p>Tu nombre es: <strong><?php echo $nombre; ?></strong></p>
    <p>Tu localidad es: <strong><?php echo $localidad; ?></strong></p>
    
    <form action="formulario2.php" method="post">
        <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
        <input type="hidden" name="localidad" value="<?php echo $localidad; ?>">
        <button type="submit" name="confirmar">Confirmar</button>
    </form>
</body>
</html>
