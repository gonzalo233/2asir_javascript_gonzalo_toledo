<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Correo Electrónico</title>
</head>
<body>
    <h2>Validar Correo Electrónico</h2>
    <form action="" method="post">
        <label for="correo">Correo Electrónico:</label>
        <input type="text" id="correo" name="correo" required>
        <button type="submit">Validar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correo = $_POST['correo'];
        $esValido = true;
        $mensaje = "";

        // Verificar si contiene una sola vez el caracter '@'
        $partes = explode('@', $correo);
        if (count($partes) !== 2) {
            $esValido = false;
            $mensaje = "El correo debe contener solo un '@'.<br>";
        }

        // Obtener el dominio
        $dominio = array_pop($partes);
        // Validar que el dominio termine en .com, .es o .org
        if (!preg_match('/\.(com|es|org)$/', $dominio)) {
            $esValido = false;
            $mensaje .= "El dominio debe ser .com, .es o .org.<br>";
        }

        // Mostrar resultados
        if ($esValido) {
            echo "El correo electrónico '$correo' es válido.";
        } else {
            echo "Errores en la validación:<br>$mensaje";
        }
    }
    ?>
</body>
</html>

