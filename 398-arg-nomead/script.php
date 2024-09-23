<?php

function sendEmail($destinatarios = '', $cc = '', $assunto = '', $mensagem = '') {

    echo "Destinatários: " . $destinatarios . "<br>";
    echo "CC: " . $cc . "<br>";
    echo "Assunto: " . $assunto . "<br>";
    echo "Mensagem: " . $mensagem . "<br>";

}

sendEmail(
    
    assunto: 'ARGUMENTOS NOMEADOS',
    mensagem: 'Dominando as novas features do PHP 8',
    destinatarios: 'messi@gmail.com'

);

echo '<hr style="color: cyan; background: cyan; height: 2px">';

/* Convencional -> Respeitando a ordem dos parâmetros */
sendEmail(
    'messi@gmail.com',
    'teste@gmail.com',
    'ARGUMENTOS NOMEADOS',
    'Dominando as novas features do PHP 8'
);

echo '<hr style="color: cyan; background: cyan; height: 2px">';

sendEmail(
    'messi@gmail.com',
    'ARGUMENTOS NOMEADOS',
    'Dominando as novas features do PHP 8'
);

?>