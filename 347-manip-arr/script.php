<?php
////////////////////
//// is_array() ////
////////////////////

$array1 = ['notebook', 'teclado'];
$retorno1 = is_array($array1);

if($retorno1) {

    echo 'Sim, isso é um array';

} else {

    echo 'Não, isso não é um array';

}

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

//////////////////////
//// array_keys() ////
//////////////////////

$array2 = [1 => 'a', 7 => 'b', 18 => 'c'];

echo '<pre style="color: #ff79c6;">';
print_r($array2);
echo '</pre>';

$chaves_array = array_keys($array2);

echo '<pre style="color: #ff79c6;">';
print_r($chaves_array);
echo '</pre>';

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

////////////////
//// sort() ////
////////////////

$array3 = ['teclado', 'mouse', 'cabo hdmi', 'fonte atx', 'notebook'];

echo '<pre style="color: #ff79c6;">';
print_r($array3);
echo '</pre>';

sort($array3); // true ou false

echo '<pre style="color: #ff79c6;">';
print_r($array3);
echo '</pre>';

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

/////////////////
//// asort() ////
/////////////////

$array4 = ['teclado', 'mouse', 'cabo hdmi', 'fonte atx', 'notebook'];

echo '<pre style="color: #ff79c6;">';
print_r($array4);
echo '</pre>';

asort($array4); // true ou false

echo '<pre style="color: #ff79c6;">';
print_r($array4);
echo '</pre>';

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

/////////////////
//// count() ////
/////////////////

$array5 = ['vectra', 'monza', 'golf', 'parati', 'uno', 'tempra'];

echo '<pre style="color: #ff79c6;">';
print_r($array5);
echo count($array5); // Irá retornar a soma dos itens contidos no array
echo '</pre>';

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

///////////////////////
//// array_merge() ////
///////////////////////

$array6 = ['osx', 'windows'];
$array7 = array('linux');
$array8 = ['solaris'];

$novo_array = array_merge($array6, $array7, $array8);

echo '<pre style="color: #ff79c6;">';
print_r($novo_array);
echo '</pre>';

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

///////////////////
//// explode() ////
///////////////////

$string = '26/04/2024';

$array_retorno = explode('/', $string);

echo '<pre style="color: #ff79c6;">';
echo $string;
print_r($array_retorno);
echo "$array_retorno[2]-$array_retorno[1]-$array_retorno[0]";
echo '</pre>';

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

///////////////////
//// implode() ////
///////////////////

$array9 = ['a', 'b', 'x', 'y']; // a, b, x, y
$string_retorno = implode(',', $array9);

echo $string_retorno;

?>