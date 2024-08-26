<?php

// void (sem retorno)
function exibirBoasVindas() {

    echo 'Bem-vindo ao curso de PHP!<br>';
    // retorna alguma coisa

}

exibirBoasVindas();
exibirBoasVindas();

// return (com retorno)
function calcularAreaTerreno($largura, $comprimento) {

    $area = $largura * $comprimento;

    return $area;

}

$area_terreno_x = calcularAreaTerreno(10, 5);
$area_terreno_y = calcularAreaTerreno(30, 12);

echo $area_terreno_x;
echo '<br>';
echo $area_terreno_y;

?>