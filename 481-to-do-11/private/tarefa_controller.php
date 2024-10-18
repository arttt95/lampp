<?php

require_once '../../app_to_do/tarefa.model.php';
require_once '../../app_to_do/tarefa.service.php';
require_once '../../app_to_do/conexao.php';

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

//echo $acao; -> Imprime qual acao está chegando na super global $_GET

if($acao  == 'inserir') {
        
    $tarefa = new Tarefa();

    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();

    header('location: nova_tarefa.php?inclusao=1');

    /*
    echo '<pre>';
    print_r($tarefaService);
    echo '</pre>';
    */
} else if($acao == 'recuperar') {

    $tarefa = new Tarefa();
    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefas = $tarefaService->recuperar();

} else if ($acao == 'atualizar') {

/* Array
(
    [tarefa] => Estudar Programing
    [id] => 1
)*/

    $tarefa = new Tarefa();
    $tarefa->__set('id', $_POST['id'])
        ->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    
    if($tarefaService->atualizar()) {

        header('location: todas_tarefas.php');
        
    }

} else if ($acao == 'remover') {

    $tarefa = new Tarefa();
    $tarefa->__set('id', $_GET['id']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->remover();

    header('location: todas_tarefas.php');

}

?>