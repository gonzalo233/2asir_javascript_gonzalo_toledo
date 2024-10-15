<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array en PHP</title>
</head>
<body>
    <?php
        // Crear el array con las palabras
        $palabras = array("hola", "mundo", "informatico");
        
        // Convertir el array en una cadena, separando por comas
        $cadena = implode(", ", $palabras);
        
        // Visualizar el contenido del array convertido en cadena
        echo "<p>Contenido del array como cadena: $cadena</p>";
    ?>
</body>
</html>
