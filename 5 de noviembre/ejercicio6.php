<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Ejercicio: Datos de Clientes</h1>

    <?php
    $clientes = [
        ["cuenta" => "2034056", "nombre" => "Antonio Ruiz", "saldo" => 1000, "ciudad" => "Chiclana"],
        ["cuenta" => "3465748", "nombre" => "Maria Torres", "saldo" => 38000, "ciudad" => "Chiclana"],
        ["cuenta" => "4768584", "nombre" => "Javier Vaquero", "saldo" => 25000, "ciudad" => "Conil"],
        ["cuenta" => "4876756", "nombre" => "Laura Moreno", "saldo" => 18000, "ciudad" => "Medina"]
    ];

    $totalSaldo = 0;
    $numeroClientes = count($clientes);

    foreach ($clientes as $cliente) {
        $totalSaldo += $cliente["saldo"];
    }
    $mediaSaldo = $totalSaldo / $numeroClientes;

    echo "<h2>Clientes con saldo inferior a la media ($mediaSaldo):</h2>";
    foreach ($clientes as $cliente) {
        if ($cliente["saldo"] < $mediaSaldo) {
            echo "<p>" . $cliente["nombre"] . "</p>";
        }
    }

    $clientesSuperiores = [];
    foreach ($clientes as $cliente) {
        if ($cliente["saldo"] > 10000) {
            $clientesSuperiores[] = $cliente["nombre"];
        }
    }
    sort($clientesSuperiores); 

    echo "<h2>Clientes con saldo superior a 10,000:</h2>";
    foreach ($clientesSuperiores as $nombre) {
        echo "<p>" . $nombre . "</p>";
    }

    // c) Clientes que no son de Chiclana
    echo "<h2>Clientes que no son de Chiclana:</h2>";
    foreach ($clientes as $cliente) {
        if ($cliente["ciudad"] !== "Chiclana") {
            echo "<p>" . $cliente["nombre"] . "</p>";
        }
    }
    ?>
</body>
</html>
