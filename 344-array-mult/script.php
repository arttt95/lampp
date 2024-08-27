<?php

$lista_coisas = [];

$lista_coisas['frutas'] = [

    1 =>'Banana',
    2 => 'Maçã',
    3 => 'Morango',
    4 => 'Uva'

];

$lista_coisas['pessoas'] = [

    1 => 'João',
    2 => 'José',
    3 => 'Maria'

];

echo '<pre style="color: #ff79c6">';
print_r($lista_coisas);
echo '</pre>';

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

echo $lista_coisas['frutas'][3];
echo '<br>';
echo $lista_coisas['pessoas'][2];

?>