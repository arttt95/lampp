<?php

class Funcionario {

    // Atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    //////////////////////
    //      Setters     //
    //////////////////////

    function setNome ($nome) {
        
        $this->nome = $nome;

    }

    function setNumFilhos ($numFilhos) {
        
        $this->numFilhos = $numFilhos;
        
    }

    function setTelefone ($telefone) {

        $this->telefone = $telefone;

    }

    //////////////////////
    //      Getters     //
    //////////////////////

    function getNome () {

        return $this->nome;

    }

    function getNumFilhos () {

        return $this->numFilhos;
        
    }

    function getTelefone () {

        return $this->telefone;

    }

    //////////////////////
    //      Métodos     //
    //////////////////////

    function resumirCadFunc() {

        return $this->getNome() . ' possui ' . $this->getNumFilhos() . ' filhos(s) e seu número de telefone é ' . $this->getTelefone() . '!';

    }

    function modificarNumFilhos ($numFilhos) {

        // Afetar um atributo do objeto
        $this->numFilhos = $numFilhos;

    }

}

$y = new Funcionario();

$y->setNome('José');
$y->setNumFilhos(3);
$y->setTelefone('11 99999-9999');
echo $y->resumirCadFunc();

///////////////////////////////////

echo '<hr>';

///////////////////////////////////

$x = new Funcionario();
$x->setNome('Maria');
$x->setNumFilhos(2);
$x->setTelefone('21 88888-8888');
echo $x->resumirCadFunc();

?>