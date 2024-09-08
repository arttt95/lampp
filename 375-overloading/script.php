<?php

class Funcionario {

    // Atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //////////////////////////////
    //          Getters         //
    //             &            //
    //          Setters         //
    // (overloading/sobrecarga) //
    //////////////////////////////

    function __set($atributo, $valor) {

        $this->$atributo = $valor;

    }

    function __get($atributo) {

        return $this->$atributo;

    }

    /*
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
    */

    //////////////////////
    //      Métodos     //
    //////////////////////

    function resumirCadFunc() {

        return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filhos(s) e seu número de telefone é ' . $this->__get('telefone') . ' trabalha como ' . $this->__get('cargo') . ' e recebe ' . $this->__get('salario') .'!';

    }

    function modificarNumFilhos ($numFilhos) {

        // Afetar um atributo do objeto
        $this->numFilhos = $numFilhos;

    }

}

$y = new Funcionario();

$y->__set('nome', 'José');
$y->__set('numFilhos', 3);
$y->__set('telefone', '11 99999-9999');
$y->__set('cargo', 'Eletricista');
$y->__set('salario', 4500);
echo $y->resumirCadFunc();

///////////////////////////////////

echo '<hr>';

///////////////////////////////////

$x = new Funcionario();
$x->__set('nome', 'Maria');
$x->__set('numFilhos', 2);
$x->__set('telefone', '21 88888-8888');
$x->__set('cargo', 'Marceneiro(a)');
$x->__set('salario', 5600);
echo $x->resumirCadFunc();

?>