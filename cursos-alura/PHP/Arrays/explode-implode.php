<?php

namespace Andre;
require 'autoload.php.php';

$nomes = "Giovanni, João, Maria, Pedro";

$array_nomes = explode(", ", $nomes);

echo "<pre>"; print_r($array_nomes); echo "</pre>";

foreach ($array_nomes as $nome ) {
    echo "<p>Olá, $nome</p>";
}

$nomesJuntos = implode(", ", $array_nomes);

echo $nomesJuntos;