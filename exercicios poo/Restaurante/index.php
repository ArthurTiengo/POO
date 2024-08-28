<?php
require 'restaurante.php';

$total = null;
$nomeCliente = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeCliente = isset($_POST['nomeCliente']) ? htmlspecialchars($_POST['nomeCliente']) : 'Cliente';
    $valorPrato = isset($_POST['valorPrato']) ? (float)$_POST['valorPrato'] : 0;

    $restaurante = new Restaurante($valorPrato);

    $total = $restaurante->calcularTotal();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Conta de Restaurante</title>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Conta de Restaurante</h1>
        <form method="post" action="">
            <label for="nomeCliente">Nome do Prato:</label>
            <input type="text" name="nomeCliente" required><br>
            <label for="valorPrato">Valor do Prato (R$):</label>
            <input type="number" name="valorPrato" step="0.01" required><br>
            <input type="submit" value="Calcular Total">
        </form>

        <?php if ($total !== null): ?>
            <h2>Valor Total a ser Pago</h2>
            <p><?php echo htmlspecialchars($nomeCliente); ?>, o valor total a ser pago, incluindo 10% de taxa para o garçom, é: R$ <?php echo number_format($total, 2, ',', '.'); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
