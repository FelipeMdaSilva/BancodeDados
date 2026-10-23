<?php

class Produto {
    public $nome;
    public $preco;
}

$produto1 = new Produto;

$produto1->nome = "Detergente";
$produto1->preco = 8;

$produto2 = new Produto;

$produto2->nome = "Teclado";
$produto2->preco = 120;

$produto3 = new Produto;

$produto3->nome = "Sofá retratil";
$produto3->preco = 500;

$produto_total = $produto1->preco + $produto2->preco + $produto3->preco;

echo "A soma dos 3 produtos é $produto_total";
?>