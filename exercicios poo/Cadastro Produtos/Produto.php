<?php
class Produto {
    private $nome;
    private $precoCompra;
    private $precoVenda;
    private $validade;

    public function __construct($nome, $precoCompra, $validade) {
        $this->nome = $nome;
        $this->precoCompra = $precoCompra;
        $this->validade = $validade;
        $this->precoVenda = $this->calcularPrecoVenda();
    }

    private function calcularPrecoVenda() {
        return $this->precoCompra * 1.30;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPrecoCompra() {
        return $this->precoCompra;
    }

    public function getPrecoVenda() {
        return $this->precoVenda;
    }

    public function getValidade() {
        return $this->validade;
    }
}
?>
