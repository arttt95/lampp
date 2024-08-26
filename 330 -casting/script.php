<?php

// gettype() => retorna o tipo da variável
$valor = 10;
$valor_f = 15.35;
$valor_s = '14.34';
$valor_b = true;

$valor2 = (double) $valor; // int => double & float

$valor3 = (string) $valor; // int => string

$valor4 = (int) $valor_f; // float => int & integer

$valor5 = (string) $valor_f; // float => string

$valor6 = (int) $valor_s; // string => int

$valor7 = (float) $valor_s; // string => float & double

$valor8 = (bool) $valor_s; // string => bool & boolean

$valor9 = (int) $valor_b; // bool & boolean => int & integer

$valor10 = (string) $valor_b; // bool & boolean => string



echo $valor . ' ' . gettype($valor); // int & integer
echo '<br>';
echo $valor2 . ' ' . gettype($valor2); // int & integer => double & float
echo '<br>';
echo $valor3 . ' ' . gettype($valor3); // int & integer => string
echo '<br>';
echo $valor4 . ' ' . gettype($valor4); // float & double => int & integer
echo '<br>';
echo $valor5 . ' ' . gettype($valor5); // float & double => string
echo '<br>';
echo $valor6 . ' ' . gettype($valor6); // string => int & integer
echo '<br>';
echo $valor7 . ' ' . gettype($valor7); // string => float & double
echo '<br>';
echo $valor8 . ' ' . gettype($valor8); // string => boolean & bool
echo '<br>';
echo $valor9 . ' ' . gettype($valor9); // bool & boolean => int & integer
echo '<br>';
echo $valor10 . ' ' . gettype($valor10); // bool & boolean => string

?>