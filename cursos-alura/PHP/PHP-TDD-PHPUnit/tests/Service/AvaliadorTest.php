<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{

    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemCrescente()
    {
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
        self::assertEquals(2500, $maiorValor);

    }

    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemDecrescente()
    {
        //Given - Arrange
        $leilao = new Leilao('Fiat 147 0 KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');

        //When - Act

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));
        
        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);
        $maiorValor = $leiloeiro->getMaiorValor();

        //Then - Assert
        self::assertEquals(2500, $maiorValor);

    }

    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemDecrescente()
    {
        //Given - Arrange
        $leilao = new Leilao('Fiat 147 0 KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');

        //When - Act

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));
        
        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);
        $menorValor = $leiloeiro->getMenorValor();

        //Then - Assert
        self::assertEquals(2000, $menorValor);

    }


    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemCrescente()
    {
        //Given - Arrange
        $leilao = new Leilao('Fiat 147 0 KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');

        //When - Act
        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);
        $menorValor = $leiloeiro->getMenorValor();

        //Then - Assert
        self::assertEquals(2000, $menorValor);

    }

}