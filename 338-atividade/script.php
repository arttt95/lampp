<?php

function calcularImpostoRenda($salario) {

    $aliquota = 0;

    if($salario <= 1903.98) {

        echo 'Você deverá pagar ' . $salario * ($aliquota / 100) . ' R$ de imposto! E sua aliquota é de ' . $aliquota . '%.';

    } else if($salario >= 1903.99 && $salario <= 2826.65) {

        $aliquota = 7.5;
        echo 'Você deverá pagar ' . $salario * ($aliquota / 100) . ' R$ de imposto! E sua aliquota é de ' . $aliquota . '%.';

    } else if($salario >= 2826.66 && $salario <= 3751.05) {

        $aliquota = 15;
        echo 'Você deverá pagar ' . $salario * ($aliquota / 100) . ' R$ de imposto! E sua aliquota é de ' . $aliquota . '%.';

    } else if($salario >= 3751.06 && $salario <= 4664.68) {

        $aliquota = 22.5;
        echo 'Você deverá pagar ' . $salario * ($aliquota / 100) . ' R$ de imposto! E sua aliquota é de ' . $aliquota . '%.';

    } else {

        $aliquota = 27.5;
        echo 'Você deverá pagar ' . $salario * ($aliquota / 100) . ' R$ de imposto! E sua aliquota é de ' . $aliquota . '%.';

    }
}

calcularImpostoRenda(1000); // Piso salarial 01 => Aliquota insenta
echo '<br>';
calcularImpostoRenda(2000); // Piso salarial 02 => Aliquota de 7,5%
echo '<br>';
calcularImpostoRenda(3000); // Piso salarial 03 => Aliquota de 15%
echo '<br>';
calcularImpostoRenda(4000); // Piso salarial 04 => Aliquota de 22,5%
echo '<br>';
calcularImpostoRenda(50000); // Piso salarial 05 => Aliquota de 27,5%

?>