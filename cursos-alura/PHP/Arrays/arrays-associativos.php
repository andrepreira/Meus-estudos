<?php

namespace Andre;
require 'autoload.php';

$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael',
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000,
];

$merge = array_merge($correntistas, $saldos);

echo "Array Merge";

echo "<pre>"; var_dump($merge); echo "</pre>";


$combine = array_combine($correntistas, $saldos);

echo "Array Combine";

$combine["Matheus"] = 4500;

echo "<pre>"; var_dump($combine); echo "</pre>";


echo "Seu saldo de é: {$combine["Giovanni"]}<br>";

echo "<pre>Verificar se a chave do array existe!</pre>";

if (array_key_exists("Joao", $combine)) {
    echo "<pre>Seu saldo de é: {$combine["Joao"]}</pre>";
} else {
    echo "<pre>Não foi encontrado</pre>";
}

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $combine);

echo "<pre>"; var_dump($maiores); echo "</pre>";