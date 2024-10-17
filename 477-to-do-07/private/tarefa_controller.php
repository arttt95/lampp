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

}

?>