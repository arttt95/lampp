<?php

session_start();

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = implode("#", [$_SESSION['id'], $titulo, $categoria, $descricao]) . PHP_EOL;

//echo $texto;

$elementos = explode('#', $texto);

if (count($elementos) != 4) {

    header('Location: abrir_chamado.php?status=insertion_error&message=Voc%C3%AA%20deve%20preencher%20todos%20os%20campos%20para%20inserir%20um%20chamado%21');

} else {

    $arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

}

header('Location: abrir_chamado.php');

?>