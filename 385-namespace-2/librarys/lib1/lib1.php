<?php

namespace A;

interface CadastroInterface {
    public function salvar();
}

class Cliente implements CadastroInterface {

    public function __construct() {
        echo '<pre style="color: #ff97c6">';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function salvar() {
        echo 'Salvando...';
    }

    /*
    public function remover() {
        echo 'Removendo...';
    }
    */

    public $nome = 'lionel Messi';

    public function __get($attr) {
        return $this->$attr;
    }

}

?>