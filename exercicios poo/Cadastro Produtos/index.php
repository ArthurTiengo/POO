<?php
require 'Produto.php';

$produto = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $precoCompra = isset($_POST['precoCompra']) ? (float)$_POST['precoCompra'] : 0;
    $validade = isset($_POST['validade']) ? htmlspecialchars($_POST['validade']) : '';

    $produto = new Produto($nome, $precoCompra, $validade);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Produto</h1>
        <form method="post" action="">
            <label for="nome">Nome do Produto:</label>
            <input type="text" name="nome" required><br>
            <label for="precoCompra">Preço de Compra (R$):</label>
            <input type="number" name="precoCompra" step="0.01" required><br>
            <label for="validade">Validade:</label>
            <input type="date" name="validade" required><br>
            <input type="submit" value="Cadastrar Produto">
        </form>

        <?php if ($produto !== null): ?>
            <h2>Informações do Produto</h2>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($produto->getNome()); ?></p>
            <p><strong>Preço de Compra:</strong> R$ <?php echo number_format($produto->getPrecoCompra(), 2, ',', '.'); ?></p>
            <p><strong>Preço de Venda:</strong> R$ <?php echo number_format($produto->getPrecoVenda(), 2, ',', '.'); ?></p>
            <p><strong>Validade:</strong> <?php echo htmlspecialchars($produto->getValidade()); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
