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
        create table if not exists tb_usuarios(
        id int not null primary key auto_increment,
        nome varchar(50) not null,
        email varchar(100) not null,
        senha varchar(30) not null
        )
    ';

    $retorno = $conexao->exec($query);

    //echo $retorno;

    /*
    $query = '
        insert into tb_usuarios(
            nome, email, senha
        ) values (
            "Cristiano Ronaldo", "cris@gmail.com", "123456"
        )
    ';*/

    $query = '
        delete from tb_usuarios
    ';    

    $retorno = $conexao->exec($query);
    echo $retorno;

    // Data Definition Language - DDL - Retorna 0
    // Data Query Language - DQL - Retorna 0
    // Data Manipulation Language - DML -Retorna a quantidade de linhas afetadas no processo (Update, Delete, Insert)

    // CRUD
    // C -> Create
    // R -> Read
    // U -> Update
    // D -> Delete

} catch (PDOException $e) {

    echo 'Erro: ' . $e->getCode() . ' | Mensagem: ' . $e->getMessage();
    // Registrar erro

}



?>