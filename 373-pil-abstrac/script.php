<?php

// Modelo
class Funcionario {

    // Atributos
    public $nome = 'José';
    public $telefone = '11 99999-9999';
    public $numFilhos = 2;

    // Métodos
    function resumirCadFunc() {

        return "$this->nome possui $this->numFilhos filhos(s)";

    }

    function modificarNumFilhos ($numFilhos) {

        // Afetar um atributo do objeto
        $this->numFilhos = $numFilhos;

    }

}

$y = new Funcionario();

echo $y->resumirCadFunc();

$y->modificarNumFilhos(3);

echo '<br>';

echo $y->resumirCadFunc();

echo '<hr>';

$x = new Funcionario();

echo $x->resumirCadFunc();

echo '<br>';

$x->modificarNumFilhos(1);

echo $x->resumirCadFunc();

?>