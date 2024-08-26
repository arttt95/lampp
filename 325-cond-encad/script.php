<?php

//
$usuario_possui_cartao_loja = true;

$valor_compra = 725;

$valor_frete = 50;

$recebeu_desconto_frete = true;

if ($usuario_possui_cartao_loja AND $valor_compra >= 400) {

    $valor_frete = 0;

} else if ($usuario_possui_cartao_loja AND $valor_compra >= 300) {

    $valor_frete = 10;
    
} else if ($usuario_possui_cartao_loja AND $valor_compra >= 100) {

    $valor_frete = 25;

} else {

    // Lógica
    $recebeu_desconto_frete = false;
    
}

?>