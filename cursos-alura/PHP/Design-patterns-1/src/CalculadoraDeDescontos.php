<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos( Orcamento $orcamento): float
    {
       $cadeiaDeDesconto = new DescontoMaisDe5Itens(
           new DescontoMaisDe500Reais(
               new SemDesconto()
           )
       );

        return $cadeiaDeDesconto->calculaDesconto($orcamento);
    }
}