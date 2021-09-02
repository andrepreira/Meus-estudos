<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Service\Avaliador;
use Alura\Leilao\Model\Usuario;

require 'vendor/autoload.php';

//Given - Arrange
$leilao = new Leilao('Fiat 147 0 KM');

$maria = new Usuario('Maria');
$joao = new Usuario('João');

//When - Act
$leilao->recebeLance(new Lance($joao, 2000));
$leilao->recebeLance(new Lance($maria, 2500));

$leiloeiro = new Avaliador();
$leiloeiro->avalia($leilao);
$maiorValor = $leiloeiro->getMaiorValor();

//Then - Assert
$valorEsperado = 2500;

if ($valorEsperado == $maiorValor) {
    echo "Teste OK" . PHP_EOL;
} else {
    echo "Teste Falhou" . PHP_EOL;
}
