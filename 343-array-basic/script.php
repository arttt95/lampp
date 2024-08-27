<?php

/////////////////////////
//  Arrays (núméricos) //
/////////////////////////

// $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'); => Também funciona
/*
$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];

$lista_frutas[] = 'Abacaxi';
*/
/*
echo '<pre style="color: #ff79c6">';
var_dump($lista_frutas);
echo '</pre>';

echo '<hr style="color: #8be9fd; background: #8be9fd; height: 2px;">';

echo '<pre style="color: #ff79c6">';
print_r($lista_frutas);
echo '</pre>';
*/
/*
print $lista_frutas[2];
*/

////////////////////////////
//  Arrays (assiciativos) //
////////////////////////////

$lista_frutas = [

    'a' => 'Banana',
    'b' => 'Maçã',
    'x' => 'Morango',
    'z' => 'Uva',
    '2' => 'Abacate'
    
];

$lista_frutas['f'] = 'Abacaxi';

echo '<pre style="color: #ff79c6;>"';
var_dump($lista_frutas);
echo '</pre>';

$lista_frutas['f'] = 'Abacaxi';
echo $lista_frutas['f'];

?>