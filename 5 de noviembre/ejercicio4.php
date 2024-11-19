<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números Primos entre 50 y 100</title>
</head>
<body>
    <h1>Números Primos entre 50 y 100</h1>

    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false; 
        }

        $divisor = 2; 

        while ($divisor <= sqrt($numero)) {
            if ($numero % $divisor == 0) {
                return false;
            }
            $divisor++;
        }

        return true;
    }

    $num = 50; 
    echo "<ul>"; 


    while ($num <= 100) {
        if (esPrimo($num)) {
            echo "<li>$num</li>"; 
        }
        $num++; 
    }

    echo "</ul>"; 
    ?>
</body>
</html>
