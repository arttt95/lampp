<?php

//
$usuario_possui_cartao_loja = false;

$valor_compra = 99;

$valor_frete = 50;

$recebeu_desconto_frete = false;

if ($usuario_possui_cartao_loja OR $valor_compra >= 100) {

    $valor_frete = 0;

    $recebeu_desconto_frete = true;

}

?>