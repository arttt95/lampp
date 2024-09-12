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

/*
class Animal {

    public $numPatas = null;
    public $cor = null;
    public $peso = null;

    function __construct ($numPatas, $cor, $peso) {

        $this->numPatas = $numPatas;
        $this->cor = $cor;
        $this->peso = $peso;

    }

    function __destruct () {

    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __set ($atribute, $value) {

        $this->$atribute = $value;

    }

    ///////////////
    //  GETTERS  //
    ///////////////

    function __get ($atribute) {

        return $this->$atribute;

    }

    ///////////////
    //  METHODS  //
    ///////////////

    function dormir () {

        echo 'O animal está dormindo...';

    }

    function comer () {

        echo 'O animal está comendo...';

    }

}

class Ave extends Animal {

    public $numPatas = null;
    public $cor = null;
    public $peso = null;
    public $tamBico = null;
    public $consegueVoar = null;

    function __construct ($numPatas, $cor, $peso, $tamBico, $consegueVoar) {

        $this->numPatas = $numPatas;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->tamBico = $tamBico;
        $this->consegueVoar = $consegueVoar;

    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __set ($atribute, $value) {

        $this->$atribute = $value;

    }

    ///////////////
    //  GETTERS  //
    ///////////////

    function __get ($atribute) {

        return $this->$atribute;

    }

    ///////////////
    //  METHODS  //
    ///////////////

    function voar () {

        if ($this->__get('consegueVoar')) {

            echo 'A ave está voando...';

        } else {

            echo 'Esta ave não consegue voar!';

        }

    }

}

class Peixe extends Animal {

    public $numPatas = null;
    public $cor = null;
    public $peso = null;
    public $temNadadeira = null;

    function __construct ($numPatas, $cor, $peso, $temNadadeira) {

        $this->numPatas = $numPatas;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->temNadadeira = $temNadadeira;

    }

    function __destruct () {

    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __set ($atribute, $value) {

        $this->$atribute = $value;

    }

    ///////////////
    //  GETTERS  //
    ///////////////

    function __get ($atribute) {

        return $this->$atribute;

    }

    ///////////////
    //  METHODS  //
    ///////////////

    function nadar () {

        if ($this->__get('temNadadeira')) {

            echo 'O peixe está nadando...';

        } else {

            echo 'Este peixe não tem nadadeira!';

        }
    }
}

$animal = new Animal(4, 'branco', 3500);

$animal->dormir(); // -> saida
echo '<br>';
$animal->comer(); // -> saida

////////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px;">';
////////////////////////////////////////////////////////////////

$ave = new Ave(2, 'cinza', 1200, 10, true);

$ave->voar(); // -> saida
echo '<br>';
$ave->dormir(); // -> saida
echo '<br>';

////////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px;">';
////////////////////////////////////////////////////////////////

$peixe = new Peixe(2, 'verde', 2000, false);

$peixe->nadar(); // -> saida
echo '<br>';
$peixe->comer(); // -> saida
echo '<br>';
$peixe->dormir(); // -> saida
*/

/*
class Imovel {

    public $quartos = null;
    public $banheiros = null;
    public $cor = null;

    function __construct($quartos, $banheiros, $cor)
    {
        $this->quartos = $quartos;
        $this->banheiros = $banheiros;
        $this->cor = $cor;
    }

    function __destruct()
    {
        
    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __get($atributo)
    {
        return $this->$atributo;
    }

    ///////////////
    //  METHODS  //
    ///////////////

    function acenderCasa()
    {
        echo 'As luzes da casa estão se acendendo...';
    }

    function apagarCasa() 
    {
        echo 'As luzes da casa estão se apagando...';
    }
}

class Casa extends Imovel {

    public $quartos = null;
    public $banheiros = null;
    public $cor = null;
    public $piscina = null;
    public $churrasqueira = null;

    function __construct($quartos, $banheiros, $cor, $piscina, $churrasqueira)
    {
        $this->quartos = $quartos;
        $this->banheiros = $banheiros;
        $this->cor = $cor;
        $this->piscina = $piscina;
        $this->churrasqueira = $churrasqueira;
    }

    function __destruct()
    {
        
    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __get($atributo)
    {
        return $this->$atributo;
    }

    ///////////////
    //  METHODS  //
    ///////////////

    function aquecerPiscina()
    {
        if ($this->__get('piscina'))
        {
            echo 'A piscina está sendo aquecida...';
        } else {
            echo 'Esta casa não tem piscina!';
        }
    }

    function acenderChurrasqueira()
    {
        if ($this->__get('churrasqueira')) {
            echo 'A churrasqueira está sendo acesa...';
        } else {
            echo 'Esta casa não tem churrasqueira!';
        }
    }
}

class Apartamento extends Imovel {

    public $quartos = null;
    public $banheiros = null;
    public $cor = null;
    public $varanda = null;

    function __construct($quartos, $banheiros, $cor, $varanda)
    {
        $this->quartos = $quartos;
        $this->banheiros = $banheiros;
        $this->cor = $cor;
        $this->varanda = $varanda;
    }

    function __destruct()
    {
        
    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    ///////////////
    //  SETTERS  //
    ///////////////

    function __get($atributo)
    {
        return $this->$atributo;
    }

    ///////////////
    //  METHODS  //
    ///////////////

    function interfonar()
    {
        echo 'O interfone está sendo acionado...';
    }

}

$imovel = new Imovel(4, 2, 'cinza');

$imovel->acenderCasa();
echo '<br>';
$imovel->apagarCasa();

///////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px">';
///////////////////////////////////////////////////////////////

$casa = new Casa(5, 3, 'grafite', false, true);

$casa->acenderCasa();
echo '<br>';
$casa->apagarCasa();
echo '<br>';
$casa->aquecerPiscina();
echo '<br>';
$casa->acenderChurrasqueira();

///////////////////////////////////////////////////////////////
echo '<hr style="background: cyan; color: cyan; height: 2px">';
///////////////////////////////////////////////////////////////

$apartamento = new Apartamento(2, 2, 'amarelo', true);

$apartamento->acenderCasa();
echo '<br>';
$apartamento->apagarCasa();
echo '<br>';
$apartamento->interfonar();
*/

?>