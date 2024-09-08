<?php

class Pessoa {

    public $nome = null;

    function __construct($nome) {

        echo 'objeto iniciado';
        $this->nome = $nome;
    }

    function __destruct() {

        echo 'objeto removido';

    }

    function __get($atributo) {

        return $this->$atributo;
    }

    function correr() {

        echo $this->__get('nome') . ' está correndo...';

    }

}

$pessoa = new Pessoa('Jorge');
echo '<br>';
echo 'Nome: ' . $pessoa->__get('nome');
echo '<br>';
$pessoa->correr();
echo '<br>';

// unset($pessoa); -> Forma proposital

?>