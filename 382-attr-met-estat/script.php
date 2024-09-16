<?php

class Exemplo {

    public static $atributo1= 'Eu sou um atributo estático';
    public $atributo2 = 'Eu sou um atributo normal';

    public static function metodo1() {
        echo 'Eu sou um método estático';
    }

    public function metodo2() {
        echo 'Eu sou um método normal';
    }
}

/*
echo Exemplo::$atributo1;

echo '<br>';

Exemplo::metodo1();
*/

// echo Exemplo::$atributo2;

// echo '<br>';

// echo Exemplo::metodo2();

$x = new Exemplo();

echo $x->atributo2;

echo '<br>';

$x->metodo2();

?>