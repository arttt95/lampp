<?php

$num1 = 1;


// Operadores Comparação / Lógicos

echo '-- Início do loop 1 --';
echo '<br>';

while($num1 < 1000) {

    echo $num1;
    echo '<br>';
    $num1 += 5;

    if ($num1 > 100) {

        break;

    }


}


echo '-- Final do loop 1 --';


$num2 = 2;

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

echo '-- Início do loop 2 --';
echo '<br>';

while($num2 < 100) {

    $num2++; // Critério de parada

    if($num2 == 4 || $num2 == 6) {

        continue;

    }

    echo $num2;
    echo '<br>';

}

?>