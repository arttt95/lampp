<?php

// Create -> Read -> Update -> Delete
class TarefaService {

    private $conexao;
    private $tarefa;

    public function __construct($conexao, $tarefa) {
        $this->conexao = $conexao->conectar();
        $this->tarefa = $tarefa;
    }

    public function inserir() { // Create

        $query = "insert into tb_tarefas(tarefa)values(:tarefa)";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
        $stmt->execute();
        
    }

    public function recuperar() { // Read
        $query = "
            select
                t.id, s.status, t.tarefa
            from
                tb_tarefas as t
                left join tb_status as s
                on (t.id_status = s.id)
            ";

        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar() { // Update
        /*
        Tarefa Object
        (
            [id:Tarefa:private] => 1
            [id_status:Tarefa:private] => 
            [tarefa:Tarefa:private] => Estudar Programing
            [data_cadastro:Tarefa:private] => 
        )*/

        $query = "
        UPDATE
            tb_tarefas
        SET
            tarefa = ?
        WHERE
            id = ?
        ";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->tarefa->__get('tarefa'));
        $stmt->bindValue(2, $this->tarefa->__get('id'));
        return $stmt->execute();
        
    }

    public function remover() { // Delete

        $query = "
            DELETE FROM
                tb_tarefas
            WHERE
                id = ?
        ";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->tarefa->__get('id'));
        $stmt->execute();
        return $stmt->execute();

    }

    public function marcarRealizada() { // Update

        $query = "
        UPDATE
            tb_tarefas
        SET
            id_status = ?
        WHERE
            id = ?
        ";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->tarefa->__get('id_status'));
        $stmt->bindValue(2, $this->tarefa->__get('id'));
        return $stmt->execute();

    }

    public function recuperarTarefasPendentes() {

        $query = "
            select
                t.id, s.status, t.tarefa
            from
                tb_tarefas as t
                left join tb_status as s
                on (t.id_status = s.id)
            where
                t.id_status = ?
            ";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->tarefa->__get('id_status'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

}

?>