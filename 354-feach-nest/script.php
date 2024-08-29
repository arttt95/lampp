<?php

$funcionarios = [

    ['nome' => 'João', 'salario' => 2500, 'data_nascimento' => '25/04/1995'],
    ['nome' => 'Maria', 'salario' => 3000, 'data_nascimento' => '02/05/1989'],
    ['nome' => 'Jpulia', 'salario' => 2200, 'data_nascimento' => '14/11/2002']

];

echo '<pre style="color: #ff79c6;">';
print_r($funcionarios);
echo '</pre>';

echo '<hr style="background: cyan; color: cyan; height: 2px;">';

foreach($funcionarios as  $idx => $funcionario) {

    foreach ($funcionario as $idx2 => $valor) {

        echo "$idx2 - $valor";
        echo '<br>';

    }

    echo '<hr style="background: cyan; color: cyan; height: 2px;">';

}

?>