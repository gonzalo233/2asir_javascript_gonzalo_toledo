<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>
<body>
    <h1>Formulario de Datos</h1>
    
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos"><br><br>

        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad"><br><br>

        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso"><br><br>

        <label for="genero">Sexo:</label>
        <select id="genero" name="genero">
            <option value="">Seleccione...</option>
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
        </select><br><br>

        <label for="estadoCivil">Estado Civil:</label>
        <select id="estadoCivil" name="estadoCivil">
            <option value="">Seleccione...</option>
            <option value="soltero">Soltero</option>
            <option value="casado">Casado</option>
            <option value="otro">Otro</option>
        </select><br><br>

        <fieldset>
            <legend>Aficiones:</legend>
            <input type="checkbox" id="cine" name="aficiones[]" value="cine">
            <label for="cine">Cine</label><br>
            <input type="checkbox" id="deporte" name="aficiones[]" value="deporte">
            <label for="deporte">Deporte</label><br>
            <input type="checkbox" id="literatura" name="aficiones[]" value="literatura">
            <label for="literatura">Literatura</label><br>
            <input type="checkbox" id="musica" name="aficiones[]" value="musica">
            <label for="musica">Música</label><br>
            <input type="checkbox" id="tebeos" name="aficiones[]" value="tebeos">
            <label for="tebeos">Tebeos</label><br>
            <input type="checkbox" id="television" name="aficiones[]" value="television">
            <label for="television">Televisión</label><br>
        </fieldset><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    // Función de recogida de datos
    function recoge($key) {
        return isset($_POST[$key]) ? trim(htmlspecialchars($_POST[$key])) : '';
    }

    // Recoger datos
    $nombre      = recoge("nombre");
    $apellidos   = recoge("apellidos");
    $edad        = recoge("edad");
    $peso        = recoge("peso");
    $sexo        = recoge("genero");
    $estadoCivil = recoge("estadoCivil");
    $aficiones   = isset($_POST['aficiones']) ? $_POST['aficiones'] : [];

    // Mostrar errores
    if ($nombre == "") {
        echo "<p class='aviso'>No ha escrito su nombre.</p>\n";
    }
    if ($apellidos == "") {
        echo "<p class='aviso'>No ha escrito sus apellidos.</p>\n";
    }
    if ($edad == "") {
        echo "<p class='aviso'>No ha indicado su edad.</p>\n";
    }
    if ($peso == "" || !is_numeric($peso)) {
        echo "<p class='aviso'>Por favor, indique un peso válido.</p>\n";
    }
    if ($sexo == "") {
        echo "<p class='aviso'>No ha indicado su sexo.</p>\n";
    }
    if ($estadoCivil == "") {
        echo "<p class='aviso'>No ha indicado su estado civil.</p>\n";
    }

    // Mostrar datos si no hay errores
    if ($nombre && $apellidos && $edad && $peso && $sexo && $estadoCivil) {
        echo "<h2>Datos Recibidos</h2>";
        echo "<p>Su nombre es <strong>$nombre</strong>.</p>\n";
        echo "<p>Sus apellidos son <strong>$apellidos</strong>.</p>\n";
        echo "<p>Tiene <strong>$edad</strong> años.</p>\n";
        echo "<p>Su peso es de <strong>$peso</strong> kg.</p>\n";
        echo "<p>Es un <strong>$sexo</strong>.</p>\n";
        echo "<p>Su estado civil es <strong>$estadoCivil</strong>.</p>\n";
        
        // Mostrar aficiones
        if (!empty($aficiones)) {
            echo "<p>Le gusta: " . implode(", ", $aficiones) . ".</p>\n";
        } else {
            echo "<p>No ha indicado ninguna afición.</p>\n";
        }
    }
    ?>
</body>
</html>
