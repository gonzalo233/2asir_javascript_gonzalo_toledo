<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Nombre Propio</title>
</head>
<body>
  
    <?php
    //dado un nombre compuesto kilian perpetuo mecorro esperanza obtener solo el nombre propio utilizando el explode
    // Definir el nombre completo
    $nombre_completo = "kilian perpetuo mecorro esperanza";
    
    // Utilizamos explode para dividir el nombre en partes
    $partes_nombre = explode(" ", $nombre_completo);
    
    // El primer elemento del arreglo es el nombre propio
    $nombre_propio = $partes_nombre[0];
    
    // Mostrar el nombre propio
    echo "<h1>El nombre propio es: $nombre_propio</h1>";
    ?>

</body>
</html>
