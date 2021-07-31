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

$correntistasNaoPagantes = [
    'Luis',
    'Luisa',
    'Rafael',
];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

echo "<pre>"; var_dump($correntistasPagantes); echo "</pre>";