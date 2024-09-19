<?php

class MinhaExceptionCustomizada extends Exception {

    private $erro = '';

    public function __construct($erro) {

        $this->erro = $erro;
    }

    public function exibirMensagemErroCustomizada() {

        echo '<div style="border: solid 1px #FFF padding: 15px; background-color: red; color: cyan;">';
            echo $this->erro;
        echo '</div>';

    }

}

try {

    throw new MinhaExceptionCustomizada('Esse é um erro de teste!');

    // Error (PHP)
    // Exception (Programadores)
    // Customizadas (Programadores)

} catch (MinhaExceptionCustomizada $e) {

    $e->exibirMensagemErroCustomizada();

}

?>