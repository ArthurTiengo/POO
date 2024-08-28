<?php
class Aluno {
    // Atributos privados
    private $nome;
    private $matricula;
    private $curso;
    private $disciplina;
    private $notas = array();

    // Construtor para inicializar os atributos
    public function __construct($nome, $matricula, $curso, $disciplina, $notas) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->curso = $curso;
        $this->disciplina = $disciplina;
        $this->notas = $notas;
    }

    // Método para calcular a média das notas e verificar a aprovação
    public function verificarAprovacao() {
        $media = array_sum($this->notas) / count($this->notas);
        return $media >= 7 ? "Aprovado" : "Retido";
    }

    // Métodos para obter as informações do aluno
    public function getNome() {
        return $this->nome;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getDisciplina() {
        return $this->disciplina;
    }

    public function getNotas() {
        return $this->notas;
    }

    // Método para exibir as informações do aluno
    public function exibirInformacoes() {
        echo "Nome: " . htmlspecialchars($this->nome) . "<br>";
        echo "Matrícula: " . htmlspecialchars($this->matricula) . "<br>";
        echo "Curso: " . htmlspecialchars($this->curso) . "<br>";
        echo "Disciplina: " . htmlspecialchars($this->disciplina) . "<br>";
        echo "Notas: " . implode(", ", array_map(function($nota) {
            return number_format($nota, 2, ',', '.');
        }, $this->notas)) . "<br>";
        echo "Status: " . $this->verificarAprovacao() . "<br>";
    }
}
?>
