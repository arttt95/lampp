<?php

// false (true/false) - Tipo variável boolean
// null e empty - Valores especiais

$funcionario1 = null;
$funcionario2 = '';
$funcionario3 = false;

//////////////////
// Valores null //
//////////////////

// null

if(is_null($funcionario1)) {

    echo 'Sim, a variável é null!';

} else {

    echo 'Não, a variável não é null!';

}

echo '<br>';

// empty

if(is_null($funcionario2)) {

    echo 'Sim, a variável é null!';

} else {

    echo 'Não, a variável não é null!';

}

echo '<br>';

// false

if(is_null($funcionario3)) {

    echo 'Sim, a variável é null!';

} else {

    echo 'Não, a variável não é null!';

}


echo '<hr style="background: cyan; color: cyan; height: 2px;">';

////////////////////
// Valores vazios //
////////////////////

// null

if(empty($funcionario1)) {

    echo 'Sim, a variável está vazia!';

} else {

    echo 'Não, a variável não está vazia!';

}

echo '<br>';

// empty

if(empty($funcionario2)) {

    echo 'Sim, a variável está vazia!';

} else {

    echo 'Não, a variável não está vazia!';

}

echo '<br>';

// false

if(empty($funcionario3)) {

    echo 'Sim, a variável está vazia!';

} else {

    echo 'Não, a variável não está vazia!';

}

?>