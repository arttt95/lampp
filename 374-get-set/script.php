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

/*
class Profissao {

    public $cargo = null;
    public $salario = null;
    public $cargaHoraria = null;

    //////////////////////
    //      Setters     //
    //////////////////////

    function setCargo ($cargo) {

        $this->cargo = $cargo;

    }

    function setSalario ($salario) {

        $this->salario = $salario;

    }

    function setCargaHoraria ($cargaHoraria) {

        $this->cargaHoraria = $cargaHoraria;

    }

    //////////////////////
    //      Getters     //
    //////////////////////

    function getCargo () {

        return $this->cargo;
    }

    function getSalario () {

        return $this->salario;
    }

    function getCargaHoraria () {

        return $this->cargaHoraria;
    }

    //////////////////////
    //      Methods     //
    //////////////////////

    function alterarSalario ($salario) {
        
        $this->salario = $salario;

    }

    function resumirProfissao () {

        return 'Pessoas que trabalham com ' . $this->getCargo() . ' normalmente recebem ' . $this->getSalario() . ' e a jornada semanal é de ' . $this->getCargaHoraria(). ' horas semanais!';
    }

}

$x = new Profissao();

$x->setCargo('Marcenaria');
$x->setSalario(2300);
$x->setCargaHoraria(40);

echo $x->resumirProfissao();
*/

?>