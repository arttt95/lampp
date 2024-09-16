<?php

namespace A;

interface CadastroInterface {
    public function salvar();
}

class Cliente implements \B\CadastroInterface {

    public function __construct() {
        echo '<pre style="color: #ff97c6">';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function salvar() {
        echo 'Salvando...';
    }

    public function remover() {
        echo 'Removendo...';
    }

    public $nome = 'Jorge';

    public function __get($attr) {
        return $this->$attr;
    }

}


////////////////////////////////////
////////////////////////////////////


namespace B;

interface CadastroInterface {
    public function remover();
}

class Cliente implements \A\CadastroInterface {

    public function __construct() {
        echo '<pre style="color: #ff97c6">';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function salvar() {
        echo 'Salvando...';
    }

    public function remover() {
        echo 'Removendo...';
    }

    public $nome = 'José';

    public function __get($attr) {
        return $this->$attr;
    }
    
}

////////////////////////////////////
////////////////////////////////////

$c = new \B\Cliente();

echo '<pre style="color: #ff79c6">';
print_r($c);
echo '</pre>';

echo $c->nome;

?>