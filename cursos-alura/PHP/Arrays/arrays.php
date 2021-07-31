<?php

namespace Andre;
require 'autoload.php.php';


// $notaPortugues = 9;
// $notaMatematica = 3;
// $notaGeografia = 10;
// $notaHistoria = 5;
// $notaQuimica = 10;

$notas = [9,3,10,5,10,8];

echo "<p>A nota de Português é: $notas[0]</p>";
echo "<p>A nota de Matemática é: $notas[1]</p>";
echo "<p>A nota de Geografia é: $notas[2]</p>";
echo "<p>A nota de História é: $notas[3]</p>";
echo "<p>A nota de Química é: $notas[4]</p>";
echo "<p>A nota de Artes é: $notas[5]</p>";

$qtdNotas = sizeof($notas);
$soma = 0;
foreach ($notas as $key => $value) {
    $soma+=$value;
}

$media = ($soma)/$qtdNotas;

echo "<p>A média é: $media</p>";
