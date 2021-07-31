<?php

namespace Andre;
require 'autoload.php.php';

$notas = [9,8];

$calculadora = new Calculadora;
$media = $calculadora->calculaMedia($notas);

if (!$media) {
    echo "<p>Não foi possível calcular a média</p>";
} else {
    echo "A média é: $media";
}
