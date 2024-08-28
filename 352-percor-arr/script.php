<?php
$ql = '<hr style="background: cyan; color: cyan; height: 2px">';

$registros = [

    ['titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'],
    ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'],
    ['titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'],
    ['titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4']

];

echo '<pre style="color: #ff79c6;">';
print_r($registros);
echo '</pre>';

echo $ql;

$idx = 0;

/////////////////////////////
/////////////////////////////
//                         //
//         While           //
//                         //
/////////////////////////////
/////////////////////////////

/*
while($idx < count($registros)) {

    echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
    echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    echo $ql;

    
    $idx++;

}
*/

/////////////////////////////
/////////////////////////////
//                         //
//        Do While         //
//                         //
/////////////////////////////
/////////////////////////////

/*
do {

    echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
    echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    echo $ql;

    
    $idx++;

} while ($idx < count($registros))
*/

/////////////////////////////
/////////////////////////////
//                         //
//          For            //
//                         //
/////////////////////////////
/////////////////////////////

for ($noticia; $idx < count($registros); $idx++) {

    echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
    echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    echo $ql;

}

?>