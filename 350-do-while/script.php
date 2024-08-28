<?php

$x = 1;

do {

    echo "X = $x";
    echo '<br>';

    $x++; // Critério de parada

    // continue
    // break

} while ($x < 9);

echo '<br>';

while ($x < 10) {

    break;
    echo 'Foi executado no while';
}

?>