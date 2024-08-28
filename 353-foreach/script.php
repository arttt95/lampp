<?php

$ql = '<hr style="background: cyan; color: cyan; height: 2px;">';

$itens = [

    'sofá',
    'mesa',
    'cadeira',
    'fogão',
    'geladeira'

];

echo '<pre style="color: #ff79c6;">';
print_r($itens);
echo '</pre>';

echo $ql;

foreach($itens as $item) {

    $item = ucfirst($item);

    // Lógica que será executada para cada item
    echo $item;

    if($item == 'Mesa') {

        echo ' => Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras!';
    }

    echo '<br>';

}

?>