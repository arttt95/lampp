<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {

$dsn = 'mysql:host=localhost;dbname=db_php_pdo';
$user = 'root';
$senha = '';

try {

    $conexao = new PDO($dsn, $user, $senha);
    
    $query = "select * from tb_usuarios where ";
    $query .= " email = :usuario ";
    $query .= " AND senha = :senha ";

    $stmt = $conexao->prepare($query);

    $stmt->bindValue(':usuario', $_POST['usuario'], PDO::PARAM_STR);
    $stmt->bindValue(':senha', $_POST['senha'], PDO::PARAM_INT);

    $stmt->execute();

    $usuario = $stmt->fetch();

    echo '<pre>';
    print_r($usuario);
    echo '</pre>';

} catch (PDOException $e) {

    echo 'Erro: ' . $e->getCode() . ' | Mensagem: ' . $e->getMessage();

}

//} else { echo "Usuário e senha não enviados."; }

?>
