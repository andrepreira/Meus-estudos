<?php declare(strict_types=1);

namespace Andre;
require 'autoload.php';

$correntistas_e_compras =[
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12",
];

echo "<pre>"; print_r($correntistas_e_compras); echo "</pre>";

ArrayUtils::remover(12, $correntistas_e_compras);

echo "<pre>"; print_r($correntistas_e_compras); echo "</pre>";