<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$dsn = 'mysql:host=localhost;dbname=db_php_pdo';
$user = 'root';
$senha = '';

$conexao = new PDO($dsn, $user, $senha);

?>