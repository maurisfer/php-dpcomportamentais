<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\CalculadoraDeImpostos;

require "vendor/autoload.php";

/*$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento -> valor = 100;

echo $calculadora->calcula($orcamento,new Icms($orcamento));
*/

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento -> valor = 600;
$orcamento -> quantidadeItens = 5;


echo $calculadora ->calculaDescontos($orcamento);

