<?php

class Veiculo {

    public $placa = null;
    public $cor = null;

    function __construct ($placa, $cor) {

        $this->placa = $placa;
        $this->cor = $cor;

    }

    function __desctruct () {


    }

    //////////////
    //   SET    //
    //////////////

    function __set($atributo, $valor) {
        
        $this->$atributo = $valor;
    }

    //////////////
    //   GET    //
    //////////////

    function __get($atributo) {

        return $this->$atributo;

    }

    ///////////////////
    //    METHODS    //
    ///////////////////

    function acelerar () {

        echo 'O veiculo está acelerando...';

    }

    function freiar () {

        echo 'O veiculo está freiando...';

    }




}

class Carro extends Veiculo {

    public $placa = null;
    public $cor = null;
    public $tetoSolar = null;

    function __construct ($placa, $cor, $tetoSolar) {

        $this->placa = $placa;
        $this->cor = $cor;
        $this->tetoSolar = $tetoSolar;

    }

    function __destruct () {


    }

    //////////////
    //   SET    //
    //////////////

    function __set($atributo, $valor) {
        
        $this->$atributo = $valor;
    }

    //////////////
    //   GET    //
    //////////////

    function __get($atributo) {

        return $this->$atributo;

    }

    ///////////////////
    //    METHODS    //
    ///////////////////


    function abrirTetoSolar () {

        echo 'O teto solar está abrindo...';

    }

    function alterarPosicaoVolante () {

        echo 'A posição do volante está sendo alterada...';

    }

}

class Moto extends Veiculo {

    public $placa = null;
    public $cor = null;
    public $contraPesoGuidao = null;

    function __construct ($placa, $cor, $contraPesoGuidao) {

        $this->placa = $placa;
        $this->cor = $cor;
        $this->contraPesoGuidao = $contraPesoGuidao;

    }

    function __destruct () {

    }

    //////////////
    //   SET    //
    //////////////

    function __set($atributo, $valor) {
        
        $this->$atributo = $valor;
    }

    //////////////
    //   GET    //
    //////////////

    function __get($atributo) {

        return $this->$atributo;

    }

    ///////////////////
    //    METHODS    //
    ///////////////////

    function empinar () {

        echo 'A moto está empinando...';

    }

}

//////////////////////////////
//    Instânciando carro    //
//////////////////////////////

$carro = new Carro('ABC-1234', 'Chumbo', true);

$carro->acelerar();
echo '<br>';
$carro->abrirTetoSolar();
echo '<br>';
$carro->alterarPosicaoVolante();
echo '<br>';
$carro->freiar();

////////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px;">';
////////////////////////////////////////////////////////////////


/////////////////////////////
//    Instânciando moto    //
/////////////////////////////

$moto = new Moto('ZZZ-4321', 'Preta', true);

$moto->acelerar();
echo '<br>';
$moto->empinar();
echo '<br>';
$moto->freiar();

////////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px;">';
////////////////////////////////////////////////////////////////

echo '<pre style="color: #ff79c6">';
print_r($carro);

////////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px;">';
////////////////////////////////////////////////////////////////

print_r($moto);
echo '</pre>';

?>