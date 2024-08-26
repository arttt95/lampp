<?php

echo '<h3>Pós-incremento</h3>';
$a = 7;

echo "O valor contido em a é $a<br>"; // a vale 7 e retorna 7 neste ponto
echo 'O valor contido em a após o incremento é ' . $a++ . '<br>'; // a vale 8 e retorna 7 neste ponto
echo "O valor atualizado de a é $a<br>"; // a vale 8 e retorna 8 neste ponto

echo '<br><br><h3>Pré-incremento</h3>';

$b = 9;

echo "O valor contido em b é $b<br>"; // b vale 9 e retorna 9 neste ponto
echo 'O valor contido em b pré-incremento é ' . ++$b . '<br>'; // b vale 10 e retorna 10 neste ponto
echo "O valor contido em b é $b<br>"; // b vale 10 e retorna 10 neste ponto

echo '<br><br><h3>Pós-decremento</h3>';

$c = 5;

echo "O valor contido em c é $c<br>"; // c vale 5 e retorna 5 neste ponto
echo 'O valor contido em c após o decremento é ' . $c-- . '<br>'; // c vale 4 e retorna 5 neste ponto
echo "O valor contido em c é $c<br>"; // c vale 4 e retorna 4 neste ponto

echo '<br><br><h3>Pré-decremento</h3>';

$d = 11;

echo "O valor contido em d é $d<br>"; // d vale 11 e retorna 11 neste ponto
echo 'O valor contido em d pré-decremento é ' . --$d . '<br>'; // d vale 10 e retorna 10 neste ponto
echo "O valor contido em d é $d<br>"; // d vale 10 e retorna 10 neste ponto

?>