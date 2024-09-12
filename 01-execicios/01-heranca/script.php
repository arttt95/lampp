<?php

class Veiculo {

    public $placa = null;
    public $cor = null;

    function __construct($placa, $cor) {

        $this->placa = $placa;
        $this->cor = $cor;

    }

    function __destruct () {

    }

    ///////////////
    //    SET    //
    ///////////////

    function __set($atributo, $valor) {

        $this->$atributo = $valor;

    }

    ///////////////
    //    GET    //
    ///////////////

    function __get($atributo) {

        return $this->$atributo;

    }

    ///////////////
    //  METHODS  //
    ///////////////

    function acelerar () {

        echo 'O veículo está acelerando...';

    }

    function freiar () {

        echo 'O veículo está freiando...';

    }

}

class Carro extends Veiculo {

    public $placa = null;
    public $cor = null;
    public $tetoSolar = null;

    function __construct($placa, $cor, $tetoSolar) {

        $this->placa = $placa;
        $this->cor = $cor;
        $this->tetoSolar = $tetoSolar;

    }

    function __destruct () {

    }

    ///////////////
    //    SET    //
    ///////////////

    function __set($atributo, $valor) {

        $this->$atributo = $valor;

    }

    ///////////////
    //    GET    //
    ///////////////

    function __get($atributo) {

        return $this->$atributo;

    }

    ///////////////
    //  METHODS  //
    ///////////////

    function abrirTetoSolar () {

        if ($this->__get('tetoSolar')) {

            echo 'Abrindo o teto solar...';

        } else {

            echo 'Este modelo é de entrada e portanto não tem teto solar!';

        }

    }

}

class Moto extends Veiculo {

    public $placa = null;
    public $cor = null;
    public $guidaoEsportivo = null;

    function __construct($placa, $cor, $guidaoEsportivo) {

        $this->placa = $placa;
        $this->cor = $cor;
        $this->guidaoEsportivo = $guidaoEsportivo;

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
    //  SETTERS  //
    ///////////////

    function __get($atributo) {

        return $this->$atributo;

    }

    ///////////////
    //  METHODS  //
    ///////////////

    function empinar () {

        if ($this->__get('guidaoEsportivo')) {

            echo 'A moto está empinando...';

        } else {

            echo 'Essa moto não impina pois não tem um guidão esportivo!';

        }

    }

}

$carro = new Carro('ZZZ-1234', 'prata', false);

$carro->abrirTetoSolar();
echo '<br>';
$carro->acelerar();

////////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px;">';
////////////////////////////////////////////////////////////////

$moto = new Moto('ABC-4444', 'preta', false);

$moto->freiar();
echo '<br>';
$moto->empinar();

?>