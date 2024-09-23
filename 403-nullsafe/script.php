<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$objeto = null;

/*
if(isset($objeto) && $objeto != null) {
    $objeto->total();
}

$objeto?->total();
*/

class Funcionario {

    public function __construct(
        private string $nome = "",
        private float $salario = 0,
    ) {}

    public function info() {
        return "Nome: {$this->nome} - Salário: {$this->salario}";
    }
}

class FolhaPagamento {

    private $funcionarios = null;

    public function __construct() {
        $this->funcionarios = [
            new Funcionario('Maria', 12000),
            new Funcionario('Fernando', 9000),
            new Funcionario('Ana', 15000),
            new Funcionario('Paulo', 3500)
        ];
    }


    public function getTotalFuncionarios() {
        return count($this->funcionarios);
    }

    public function getFuncionario() {
        return $this->funcionarios['9'];
    }
}

$folhaPagamento = new FolhaPagamento();
//$folhapagamento = null;

/*
if(isset($folhapagamento) && $folhapagamento != null) {
    $folhapagamento->getTotalFuncionarios();
}*/

echo $folhaPagamento?->getTotalFuncionarios();

echo '<br>';
echo '<br>';

print_r($folhaPagamento?->getFuncionario()?->info());

echo '<br>';

echo 'Está ignorando os argumentos null e está funcionando...';

?>