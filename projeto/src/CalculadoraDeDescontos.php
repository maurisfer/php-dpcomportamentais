<?php


namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\SemDesconto;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\Descontos\DescontoMaisDeCincoItens;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento):float
    {
        $cadeiaDeDescontos  = new DescontoMaisDeCincoItens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos -> calculaDesconto($orcamento);
    }
}