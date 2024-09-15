<?php

class Pai {

    private $nome = 'Jorge';
    protected $sobrenome = 'Silva';
    public $humor = 'Feliz';

    /*
    public function getNome() {
        return $this->nome;
    }

    public function setNome($valor) {
        if(strlen($valor) >= 3) {
            $this->nome = $valor;
        }
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($valor) {
        if(strlen($valor) >= 3) {
            $this->sobrenome = $valor;
        }
    }
    */

    public function __set($attr, $valor) {
        if(strlen($attr >= 3)) {
            $this->$attr = $valor;
        }
    }

    public function __get($attr) {
        return $this->$attr;
    }

    private function executarMania() {
        echo 'Assobiar';
    }

    protected function responder() {
        echo 'Oi';
    }

    public function executarAcao($func) {
        return $this->$func();
    }

    public function executarAcaoAleatoria() {
        $x = rand(1, 10);

        if($x >= 1 && $x <= 5) {
            $this->executarMania();
        } else {
            $this->responder();
        }
    }

}

$pai = new Pai();

echo $pai->nome;
$pai->nome = 'Augusto';
echo '<br>';
echo $pai->nome;

////////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px;">';
////////////////////////////////////////////////////////////////

echo $pai->sobrenome;
echo '<br>';
$pai->sobrenome;
echo $pai->__get('sobrenome');

////////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px;">';
////////////////////////////////////////////////////////////////

echo 'O pai se chama ' . $pai->nome . ' ' . $pai->sobrenome . '.';

////////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px;">';
////////////////////////////////////////////////////////////////

echo $pai->executarAcao('executarMania');

////////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px;">';
////////////////////////////////////////////////////////////////

echo $pai->executarAcaoAleatoria();
?>