<?php

$texto = 'Curso Completo de PHP';

echo strtolower($texto); // string to lower

echo '<hr>';

echo strtoupper($texto); // string to upper

echo '<hr>';

echo ucfirst($texto); // upper case first

echo '<hr>';

echo ucfirst($texto); // upper case first

echo '<hr>';

echo strlen($texto); // Retorna um integer correspondente ao tamanho da string

echo '<hr>';

echo str_replace('P', 'F', $texto); // Substitui o primeiro parâmetro pelo segundo

echo '<hr>';

echo str_replace('.', ',', 22.90);

echo '<hr>';

// 'Curso Completo de PHP'
echo substr($texto, 0, 5); // Curso
echo '<hr>';
echo substr($texto, 6, 8); // Curso

?>