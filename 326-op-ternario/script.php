<?php

// O CONTEÚDO DESTA AULA FOI DEPRECIADO NA VERSÃO 7.4 DO PHP, SEGUE APENAS PARA FINS DIDÁTICOS.

//
$usuario_possui_cartao_loja = false;

$valor_compra = 50;

$valor_frete = 50;

$recebeu_desconto_frete = true;

$valor_frete_auxiliar = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : $usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : $usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete;

$recebeu_desconto_frete = $valor_frete != $valor_frete_auxiliar ? true : false;

$valor_frete = $valor_frete_auxiliar;

/*
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
*/

?>