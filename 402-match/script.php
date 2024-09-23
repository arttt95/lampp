<?php

$busca = 15;

switch ($busca) { // O switch compara por igualdade/equalidade (==)

    case '1':
        $retornoSwitch = 'Encontrou o texto 1';
        break;
    case 2:
        $retornoSwitch = 'Encontrou o número 2';
        break;
    default:
        $retornoSwitch = 'NÃO ENCONTROU';

}

echo 'Resultado switch: ' . $retornoSwitch;
echo '<hr style="color: cyan; background: cyan; height: 2px;">';

/*
$retornoMatch = match($busca) { // O match compara por identidade/estrita (===)

    '1' => 'Encontrou o texto 1',
    1 => 'Econtrou o número 1',
    '2' => 'Encontrou o texto 2',
    2 => 'Encontrou o número 2',
    5, '8', 12, 'X' => 'Encontrou os números 5 ou 12, ou o texto 8, ou a letra X',
    default => 'NÃO ENCONTROU'
};
*/

// Match com condicionais e operações lógicas
$retornoMatch = match(true) {

    $busca < 20 => 'Encontrou um valor menor que 20',
    $busca >= 20 && $busca <= 30 => 'Encontrou um valor entre 20 e 30',
    default => 'NÃO ENCONTROU' 

};

echo 'Resultado match: ' . $retornoMatch;

?>