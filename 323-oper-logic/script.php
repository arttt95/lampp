<?php
// Operadores Lógicos

// Operador: E (AND ou &&) - Verdadeiro se todos forem true
// Operador: OU (OR ou ||) - Verdadeiro se pelo menos un for true
// Operador Xor (XOR) - Verdadeiro apenas se um true, mas não ambos
// Operador Negação (!) - Inverte o resultado da expressão

// false && true = false
if (5 == 3 AND 10 > 3) {

    echo 'Verdadeiro 1';

} else {

    echo 'Falso 1';

}

echo '<br>';

// true && true = true
if (3 == 3 && 10 > 3) {

    echo 'Verdadeiro 2';

} else {

    echo 'Falso 2';

}

echo '<br>';

// false || true = true
if (5 == 3 || 10 > 3) {

    echo 'Verdadeiro 3';

} else {

    echo 'Falso 3';

}

echo '<br>';

// true XOR false = true
if (4 == 4 XOR 10 > 15) {

    echo 'Verdadeiro 4';

} else {

    echo 'Falso 4';

}

echo '<br>';

// !(true XOR false) = !(true) = false
if (!(4 == 4 XOR 10 > 15)) {

    echo 'Verdadeiro 5';

} else {

    echo 'Falso 5';

}

echo '<br>';

// !(false) = !(false) = true
if (!(false)) {

    echo 'Verdadeiro 6';

} else {

    echo 'Falso 6';

}

echo '<br>';

// (true AND true) OR false = true
if ((20 == 20 AND 10 > 3) OR 12 != '12') {

    echo 'Verdadeiro 7';

} else {

    echo 'Falso 7';

}

?>