<?php

// in_array() -> true ou false para a existência do está sendo procurado
// array_search() -> 

$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

echo '<pre style="color: #ff79c6;">';
print_r($lista_frutas);
echo '</pre>';

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

$existe = in_array('Morango', $lista_frutas);
// if true -> texto impresso = 1
// if false -> texto impresso = vazio

if ($existe) {

    echo 'A fruta pesquisada existe dentro do array.';

} else {

    echo 'A fruta pesquisada não existe dentro do array.';

}

echo '<br>';

$existe2 = array_search('Uva', $lista_frutas);
// array_search se retorno for false retorna null e não 'false' própriamente dito

echo $existe2;

echo '<br>';

if ($existe2 != null) {

    echo 'A fruta pesquisada existe dentro do array.';

} else {

    echo 'A fruta pesquisada não existe dentro do array.';

}

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

$lista_coisas = [

    'frutas' => $lista_frutas,
    'pessoas' => ['João', 'Maria']

];

echo '<pre style="color: #ff79c6;">';
print_r($lista_coisas);
echo '</pre>';

echo in_array('Morango', $lista_coisas['frutas']);

?>