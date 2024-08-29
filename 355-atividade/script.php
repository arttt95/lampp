<?php

// Através de loops criar Arrays com 6 elementos
// Elementos numéricos entre e 60
// Números contidos no Array não podem repetir

$sorteados = [];

while (count($sorteados) < 6) {

    $numero_random = random_int(1, 60);

    if (!(in_array($numero_random, $sorteados))) {

        array_push($sorteados, $numero_random);

    }

}

echo '<pre style="color: #ff79c6">';
print_r($sorteados);
echo '</pre>';

?>