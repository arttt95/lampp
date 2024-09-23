<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*class Produto {
    public string $nome = '';
    public float $valor = 0;

    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

}
*/

///////////////
///         ///
///  PHP 8  ///
///         ///
///////////////

class Produto {

    public function __construct(public string $nome = "", public float $valor = 0) {}

}

$produto = new Produto(valor: 1500, nome: 'Smartphone');

echo "Produto: {$produto->nome}";
echo '<br>';
echo "Valor: {$produto->valor}";

echo '<hr style="color: cyan; background: cyan; height: 2px">';

$produto2 = new Produto(nome: 'Geladeira', valor: 2200);

echo "Produto: {$produto2->nome}";
echo '<br>';
echo "Valor: {$produto2->valor}";

?>