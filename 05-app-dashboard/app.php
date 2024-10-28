<?php

// Classe dashboard
class Dashboard {

    public $data_inicio;
    public $data_fim;
    public $numeroVendas;
    public $totalVendas;


    public function __get($attr) {
        return $this->$attr;
    }

    public function __set($attr, $value) {
        $this->$attr = $value;
        return $this;
    }

}

// Classe de conexao com o banco de dados
class Conexao {

    private $host = 'localhost';
    private $dbname = 'dashboard';
    private $user = 'root';
    private $pass = '';

    public function conectar() {
        try {

            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            // Padronizando a collation para UTF-8
            // Como tanto back quanto front utilizam o msm collation
            $conexao->exec('set charset utf8');

            return $conexao;

        } catch (PDOException $e) {
            echo '<p>Erro: ' . $e->getMessage() . '</p>';
        }
    }

}

// Classe (model)

class Db {

    private $conexao;
    private $dashboard;

    public function __construct(Conexao $conexao, Dashboard $dashboard) {
        $this->conexao = $conexao->conectar();
        $this->dashboard = $dashboard;
    }

    public function getNumeroVendas() {
        $query = "
            SELECT
                COUNT(*) AS numero_vendas
            FROM
                tb_vendas
            WHERE
                data_venda BETWEEN :data_inicio AND :data_fim
            ";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
        $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;

    }

    public function getTotalVendas() {
        $query = "
            SELECT
                SUM(total) AS total_vendas
            FROM
                tb_vendas
            WHERE
                data_venda BETWEEN :data_inicio AND :data_fim
            ";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
        $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
        
    }

}

////////////////////////
//  LÓGICA DO SCRIPT  //
////////////////////////

$dashboard = new Dashboard();
$conexao = new Conexao();

$competencia = explode('-', $_GET['competencia']);
$ano = $competencia[0];
$mes = $competencia[1];

$dias_do_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

$dashboard->__set('data_inicio', $ano . '-' . $mes . '-01');
$dashboard->__set('data_fim', $ano . '-' . $mes . '-' . $dias_do_mes);


$db = new Db($conexao, $dashboard);

$dashboard->__set('numeroVendas', $db->getNumeroVendas());
$dashboard->__set('totalVendas', $db->getTotalVendas());

/*
echo '<pre>';
print_r($db->getTotalVendas());
echo '</pre>';

echo '<pre>';
print_r($dashboard);
echo '</pre>';
*/

echo json_encode($dashboard);

?>