<?php
function mostrarNumerosEntre($num1, $num2) {

    if ($num1 > $num2) {
        echo "Números comprendidos entre $num1 y $num2 (inclusive):\n";

        for ($i = $num2; $i <= $num1; $i++) {
            echo $i . " ";
        }
        echo "\n";
    } else {
        echo "$num1 no es mayor que $num2.\n";
    }
}

mostrarNumerosEntre(10, 5); 
echo "\n";
mostrarNumerosEntre(3, 8);  
?>
