<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {

    $dsn = 'mysql:host=localhost;dbname=db_php_pdo';
    $user = 'root';
    $senha = '';

    try {

        $conexao = new PDO($dsn, $user, $senha);
        
        // Mostra a query que será executada
        $query = "
            SELECT
                *
            FROM
                tb_usuarios
            WHERE
                email = '{$_POST['usuario']}'
                AND senha = '{$_POST['senha']}'
        ";

        echo "Query: " . $query; // Mostra a query

        echo "<hr>";

        $stmt = $conexao->query($query);

        $usuario = $stmt->fetch();

            echo "Usuário encontrado: ";
            echo "<br>";
            echo "<pre>";
            print_r($usuario);
            echo "</pre>";

        /*
        // Verifica se a consulta retornou resultados
        if ($stmt) {

            $usuario = $stmt->fetch();

            echo "Usuário encontrado: ";
            echo "<br>";
            echo "<pre>";
            print_r($usuario);
            echo "</pre>";

        } else {

            echo "A consulta não retornou nenhum resultado.";

        }
        */

    } catch (PDOException $e) {

        echo 'Erro: ' . $e->getCode() . ' | Mensagem: ' . $e->getMessage();

    }

} else {
    echo "Usuário e senha não enviados.";
}

?>
