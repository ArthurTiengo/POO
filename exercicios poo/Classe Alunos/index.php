<?php
// Inclui o arquivo da classe Aluno
require 'Aluno.php';

// Inicializa a variável para armazenar a instância da classe Aluno
$aluno = null;

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $matricula = isset($_POST['matricula']) ? htmlspecialchars($_POST['matricula']) : '';
    $curso = isset($_POST['curso']) ? htmlspecialchars($_POST['curso']) : '';
    $disciplina = isset($_POST['disciplina']) ? htmlspecialchars($_POST['disciplina']) : '';
    $notas = array(
        isset($_POST['nota1']) ? (float)$_POST['nota1'] : 0,
        isset($_POST['nota2']) ? (float)$_POST['nota2'] : 0,
        isset($_POST['nota3']) ? (float)$_POST['nota3'] : 0,
        isset($_POST['nota4']) ? (float)$_POST['nota4'] : 0,
    );

    // Cria uma instância da classe Aluno com os dados fornecidos
    $aluno = new Aluno($nome, $matricula, $curso, $disciplina, $notas);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="styles.css"> <!-- Inclua seu CSS aqui -->
</head>
<body>
    <div class="container">
        <h1>Cadastro de Aluno</h1>
        <form method="post" action="">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required><br>
            <label for="matricula">Matrícula:</label>
            <input type="text" name="matricula" required><br>
            <label for="curso">Curso:</label>
            <input type="text" name="curso" required><br>
            <label for="disciplina">Disciplina:</label>
            <input type="text" name="disciplina" required><br>
            <label for="nota1">Nota 1:</label>
            <input type="number" name="nota1" step="0.01" required><br>
            <label for="nota2">Nota 2:</label>
            <input type="number" name="nota2" step="0.01" required><br>
            <label for="nota3">Nota 3:</label>
            <input type="number" name="nota3" step="0.01" required><br>
            <label for="nota4">Nota 4:</label>
            <input type="number" name="nota4" step="0.01" required><br>
            <input type="submit" value="Cadastrar Aluno">
        </form>

        <?php if ($aluno !== null): ?>
            <h2>Informações do Aluno</h2>
            <p><?php $aluno->exibirInformacoes(); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
