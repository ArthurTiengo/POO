<?php
// Inclui o arquivo da classe Pessoa
require 'Pessoa.php';

// Inicializa a variável para armazenar a instância da classe Pessoa
$pessoa = null;

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $idade = isset($_POST['idade']) ? (int)$_POST['idade'] : 0;
    $profissao = isset($_POST['profissao']) ? htmlspecialchars($_POST['profissao']) : '';

    // Cria uma instância da classe Pessoa com os dados fornecidos
    $pessoa = new Pessoa($nome, $idade, $profissao);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <link rel="stylesheet" href="styles.css"> <!-- Inclua seu CSS aqui -->
</head>
<body>
    <div class="container">
        <h1>Cadastro de Pessoa</h1>
        <form method="post" action="">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required><br>
            <label for="idade">Idade:</label>
            <input type="number" name="idade" required><br>
            <label for="profissao">Profissão:</label>
            <input type="text" name="profissao" required><br>
            <input type="submit" value="Cadastrar Pessoa">
        </form>

        <?php if ($pessoa !== null): ?>
            <h2>Informações da Pessoa</h2>
            <p><?php $pessoa->exibirInformacoes(); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
