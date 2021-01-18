<?php


namespace Alura\DesignPattern;


class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizaco;
    public Orcamento $orcamento;
}