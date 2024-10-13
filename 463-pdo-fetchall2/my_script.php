<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$dsn = 'mysql:host=localhost;dbname=db_php_pdo';
$user = 'root';
$senha = '';

// Tratando Exceptions quanto a inserção do DNS (nome do db; senha; usuário)
try {

    $conexao = new PDO($dsn, $user, $senha);

    $query = '
        select
            *
        from
            tb_usuarios
    ';

    $stmt = $conexao->query($query);

    $lista = $stmt->fetchAll(PDO::FETCH_OBJ);
    // FETCH_ASSOC && FETCH_NUM && FETCH_BOTH && FETCH_OBJ (->)

    echo '<pre>';
    print_r($lista);
    echo '</pre>';

    echo $lista[0]->nome;
    echo '<br>';
    echo $lista[2]->email;

} catch (PDOException $e) {

    echo 'Erro: ' . $e->getCode() . ' | Mensagem: ' . $e->getMessage();
    // Registrar erro

}



?>