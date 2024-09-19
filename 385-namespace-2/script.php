<?php

require "./librarys/lib1/lib1.php";
require "./librarys/lib2/lib2.php";

////////////////////////////////////

use A\Cliente as C1;
use B\Cliente as C2;

$c1 = new C1();

echo '<pre style="color: #ff79c6">';
print_r($c1);
echo '</pre>';

echo $c1->__get('nome');

////////////////////////////////////
echo '<hr style="color: cyan; background: cyan; height: 2px;">';
////////////////////////////////////

$c2 = new C2();

echo '<pre style="color: #ff79c6">';
print_r($c2);
echo '</pre>';

echo $c2->__get('nome');

?>