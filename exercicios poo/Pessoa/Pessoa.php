<?php
class Pessoa {
    // Atributos privados
    private $nome;
    private $idade;
    private $profissao;

    // Construtor para inicializar os atributos
    public function __construct($nome, $idade, $profissao) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    // Método para calcular a idade (neste caso apenas retorna a idade armazenada)
    public function calcularIdade() {
        return $this->idade;
    }

    // Método para exibir as informações da pessoa
    public function exibirInformacoes() {
        echo "Nome: " . htmlspecialchars($this->nome) . "<br>";
        echo "Idade: " . $this->calcularIdade() . "<br>";
        echo "Profissão: " . htmlspecialchars($this->profissao) . "<br>";
    }
}
?>
