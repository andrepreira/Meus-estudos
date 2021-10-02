<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;

require_once 'vendor/autoload.php';

ini_set('xdebug.dump.GET', '*');
ini_set('xdebug.show_local_vars', 'on');
$leilao = new Leilao('Um objeto muito legal');

$umUsuario = new Usuario('André Pereira');
$leilao->recebeLance(new Lance($umUsuario, 1000));
$leilao->recebeLance(new Lance($umUsuario, 1500));