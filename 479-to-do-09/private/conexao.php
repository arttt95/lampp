<?php

class Conexao {

    private $host = 'localhost';
    private $dbname = 'db_php_pdo';
    private $user = 'root';
    private $pass = '';

    public function conectar() {

        try {

            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname", // DSN
                "$this->user", // Usuário
                "$this->pass"  // Senha
            );

            return $conexao;

        } catch (PDOException $e) {

            echo '<p>Erro: ' . $e->getCode() . ' | Mensagem: ' . $e->getMessage() . '</p>';

        }

    }
}

?>