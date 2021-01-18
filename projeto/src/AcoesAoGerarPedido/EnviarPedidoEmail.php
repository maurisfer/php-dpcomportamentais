<?php


namespace Alura\DesignPattern\AcoesAoGerarPedido;


use Alura\DesignPattern\Pedido;

class EnviarPedidoEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando e-mail de pedido gerado".PHP_EOL;
    }
}