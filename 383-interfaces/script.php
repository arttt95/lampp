<?php

interface EquipamentoEletronicoInterface {

    public function ligar();

    public function desligar();
}
class Geladeira implements EquipamentoEletronicoInterface {

    public function abrirPorta() {
        echo 'Abrir a porta';
    }

    public function ligar() {
        echo 'Ligar';
    }

    public function desligar() {
        echo 'Desligar';
    }
}

class Tv implements EquipamentoEletronicoInterface {

    public function trocarCanal() {
        echo 'Trocar canal';
    }

    public function ligar() {
        echo 'Ligar';
    }

    public function desligar() {
        echo 'Desligar';
    }
}

$x = new Geladeira();

$y = new Tv();

////////////////////////////////////////

interface  MamiferoInterface {

    public function respirar();

}

interface TerrestreInterface {

    public function andar();

}

interface AquaticoInterface {

    public function nadar();
}

class Humano implements MamiferoInterface, TerrestreInterface {

    public function conversar() {
        echo 'Conversando...';
    }

    public function respirar() {
        echo 'Respirando...';
    }

    public function andar() {
        echo 'Andando...';
    }
}

class Baleia  implements MamiferoInterface, AquaticoInterface {

    public function esquichar() {
        echo 'Esguichando...';
    }

    public function respirar() {
        echo 'Respirando...';
    }

    public function nadar() {
        echo 'Nadando...';
    }
}

/////////////////////////////////////////

interface AnimalInterface {

    public function comer();
}

interface AveInterface extends AnimalInterface {

    public function voar();
}

class Papagaio implements AveInterface {

    public function comer() {
        echo 'Comendo...';
    }

    public function voar() {
        echo 'Voando...';
    }

}

$loro = new Papagaio();

$loro->comer();

echo '<br>';

$loro->voar();

?>