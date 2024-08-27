<?php

echo '<h3>Dados de data/hora padrões do PHP (Berlin):<br></h3>';
echo 'Os dados foram alterados através de => sudo gedit /opt/lampp/etc/php.ini';

echo '<br><br>';

// Recuperação da data corrente ou data atual
echo date('D');

echo '<br>';

// dia/mes/ano horas:minutos
echo date('d/m/Y H:i');

echo '<br>';

// obter o time zone da nossa aplicação
echo date_default_timezone_get();

echo '<br>';

// obter o time zone da nossa aplicação
date_default_timezone_set('America/Sao_Paulo');

echo '<hr style="color: #8be9fd; background: #8be9fd; height: 2px;">';
echo '<h3>Atualizado em runtime (São Paulo):</h3><br>';

// obter o time zone da nossa aplicação => CORRETO => Alterado em runtime
echo date_default_timezone_get();

echo '<br>';

// Recuperação da data corrente ou data atual => CORRETO => Alterado em runtime
echo date('D');

echo '<br>';

// dia/mes/ano horas:minutos => CORRETO => Alterado em runtime
echo date('d/m/Y H:i');

echo '<hr style="color: #8be9fd; background: #8be9fd; height: 2px;">';

$data_inicial = '2024-07-27';
$data_final = '2024-08-22';

// timestamp
// 01/Jan/1070 -- 27/Jul/2024 (JS => milisegundos | PHP => segundos)

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

echo $data_inicial . ' - ' . $time_inicial;
echo '<br>';
echo $data_final . ' - ' . $time_final;

$diferenca_seg = abs($time_final - $time_inicial);

echo '<br>';
echo $diferenca_seg;

$sec_per_day = 24 * 60 * 60; // Um dia tem 84600 segundos;
$diferenca_dias = (int) ($diferenca_seg / $sec_per_day);

echo '<br>';
echo "Um dia tem $sec_per_day segundos.";

echo '<br>';
echo "A diferença entre $data_inicial e $data_final é de $diferenca_dias dias.";

?>