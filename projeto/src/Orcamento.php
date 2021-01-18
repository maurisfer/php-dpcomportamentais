<?php


namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public float $valor;
    public int $quantidadeItens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this -> estadoAtual = new EmAprovacao();
    } // Inicia a classe com estado padrão em aporvação

    public function aplicaDescontoExtra()
    {
        $this -> valor -= $this -> estadoAtual -> calculaDescontoExtra($this);
    } // Quando instanciado calcula o desconto de acordo com o estado

    public function aprova()
    {
        $this -> estadoAtual -> aprova($this);
    } // Altera o estado para aprovado

    public function reprova()
    {
        $this -> estadoAtual -> reprova($this);
    } // Altera o estado para reprovado

    public function finaliza()
    {
        $this -> estadoAtual -> finaliza($this);
    } // Altera o estado para finalizado

}

