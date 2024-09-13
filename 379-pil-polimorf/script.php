<?php

/////////////////////////////////
// VEICULO - VEICULO - VEICULO //
/////////////////////////////////

class Veiculo {

    public $placa = null;
    public $cor = null;

    function __construct($placa, $cor) {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function __destruct() {

    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    ///////////////
    //  GETTERS  //
    ///////////////

    function __get($atributo) {
        return $this->$atributo;
    }

    ///////////////
    //  METHODS  //
    ///////////////

    function acelerar() {
        echo 'O veículo está acelerando...';
    }

    function freiar() {
        echo 'O veiculo está freiando...';
    }

    function trocarMarcha() {
        echo 'Desengatar a embreagem com o pé e engatar marcha com a mão';
    }
}

////////////////////////
// MOTO - MOTO - MOTO //
////////////////////////

class Moto extends Veiculo {

    public $placa = null;
    public $cor = null;
    public $contraPesoGuidao = null;

    function __construct($placa, $cor, $contraPesoGuidao) {
        $this->placa = $placa;
        $this->cor = $cor;
        $this->contraPesoGuidao = $contraPesoGuidao;
    }

    function __desctruct() {
        
    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    ///////////////
    //  GETTERS  //
    ///////////////

    function __get($atributo) {
        return $this->$atributo;
    }

    ///////////////
    //  METHODS  //
    ///////////////

    function empinar() {
        if($this->__get('contraPesoGuidao')) {
            echo 'A moto está empinando...';
        } else {
            echo 'Este modelo de moto não empina pois nã o possui contra peso no guidão!';
        }
    }

    function trocarMarcha() {
        echo 'Desengatar embreagem com a mão e engatar a marcha com o pé';
    }
}

///////////////////////////
// CARRO - CARRO - CARRO //
///////////////////////////

class Carro extends Veiculo {

    public $placa = null;
    public $cor = null;
    public $tetoSolar = null;

    function __construct($placa, $cor, $tetoSolar) {
        $this->placa = $placa;
        $this->cor = $cor;
        $this->tetoSolar = $tetoSolar;
    }

    function __destruct() {

    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    ///////////////
    //  GETTERS  //
    ///////////////

    function __get($atributo) {
        return $this->$atributo;
    }

    ///////////////
    //  METHODS  //
    ///////////////

    function abrirTetoSolar() {
        if($this->__get('tetoSolar')) {
            echo 'O teto solar está abrindo...';
        } else {
            echo 'Este modelo de carro não tem teto solar';
        }
    }

    function alterarPosicaoVolante() {
        echo 'Alterando a posição do volante...';
    }
}

class Caminhao extends Veiculo {}

$carro = new Carro('ABC-1234', 'cinza', true);

$moto = new Moto('ZZZ-3333', 'amarela', false);

$caminhao = new Caminhao('FFF-3434', 'preta');

$carro->trocarMarcha();

echo '<br>';

$moto->trocarMarcha();

echo '<br>';

$caminhao->trocarMarcha();

?>