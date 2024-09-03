<?php

session_start();

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = implode("#", [$_SESSION['id'], $titulo, $categoria, $descricao]) . PHP_EOL;

//echo $texto;

$elementos = explode('#', $trxto);

if (count($elementos) === 4) {

    $arquivo = fopen('arquivo.txt', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

} else {

    header('Location: abrir_chamado.php');

}

header('Location: abrir_chamado.php?status=insertion_error&message=Voc%C3%AA%20deve%20preencher%20todos%20os%20campos%20para%20inserir%20um%20chamado%21
');

?>