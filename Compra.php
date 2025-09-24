<?php 

// Arquivo: Compra.php
// Autor: Julio Gabriel Paes Pinto <2032945> – Turma 1 C ADS 2°
// Descrição: Implementação de classes para gerenciamento de produtos e itens de pedido, incluindo cálculo do subtotal de cada item com base na quantidade e preço do produto.

    class ProdutoSimples
    {
        public string $nome;
        public float $preco;

        public function __construct(string $nomeProduto, float $precoProduto)
        {
            $this->nome = $nomeProduto;
            $this->preco =$precoProduto;
        }
    }

    class ItemPedido
    {
        public ProdutoSimples $produto;

        public int $quantidade;

        public function __construct(ProdutoSimples $produtoCompra, int $quantidadeProduto)
        {
            $this->produto = $produtoCompra;
            $this->quantidade = $quantidadeProduto;
        }

        public function subTotal()
        {
            return $this->produto->preco * $this->quantidade . "<br>";
        }
    }

    $produto1 = new ProdutoSimples("Uva", 12);
    $pedido1 = new ItemPedido($produto1, 3);

    $produto2 = new ProdutoSimples("Morango", 14.50);
    $pedido2 = new ItemPedido($produto2, 1);
    
    $produto3 = new ProdutoSimples("Maça", 8);
    $pedido3 = new ItemPedido($produto3, 5);

    echo $pedido2->subTotal();
    echo $pedido3->subTotal();
    echo $pedido1->subTotal();
?>