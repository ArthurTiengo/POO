<?php
// Define a classe Aluno dentro do arquivo
class Aluno {
    // Propriedades privadas para armazenar as notas
    private $nota1;
    private $nota2;
    private $nota3;
    private $nota4;

    // Construtor para inicializar as notas
    public function __construct($nota1, $nota2, $nota3, $nota4) {
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->nota4 = $nota4;
    }

    // Método para calcular a média
    public function calcularMedia() {
        $soma = $this->nota1 + $this->nota2 + $this->nota3 + $this->nota4;
        return $soma / 4;
    }
}

// Inicializa a variável média como null
$media = null;

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe as notas do formulário
    $nota1 = isset($_POST['nota1']) ? (float)$_POST['nota1'] : 0;
    $nota2 = isset($_POST['nota2']) ? (float)$_POST['nota2'] : 0;
    $nota3 = isset($_POST['nota3']) ? (float)$_POST['nota3'] : 0;
    $nota4 = isset($_POST['nota4']) ? (float)$_POST['nota4'] : 0;

    // Cria uma instância da classe Aluno com as notas
    $aluno = new Aluno($nota1, $nota2, $nota3, $nota4);

    // Calcula a média
    $media = $aluno->calcularMedia();
}
?>
<?php if ($media !== null): ?>
        <h2>Média Calculada</h2>
        <p>A média do aluno é: <?php echo number_format($media, 2); ?></p>
    <?php endif; ?>