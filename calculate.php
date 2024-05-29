<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $price = floatval($_POST['price']);
    $quantity = intval($_POST['quantity']);
    $discount = floatval($_POST['discount']);

    // Calcula o total sem desconto
    $total = $price * $quantity;

    // Calcula o valor do desconto
    $discountAmount = ($discount / 100) * $total;

    // Calcula o total a ser pago após o desconto
    $totalAfterDiscount = $total - $discountAmount;

    // Formata os valores para exibição
    $total = number_format($total, 2, ',', '.');
    $discountAmount = number_format($discountAmount, 2, ',', '.');
    $totalAfterDiscount = number_format($totalAfterDiscount, 2, ',', '.');
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cálculo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Resultado do Cálculo de Venda</h1>
        <p><strong>Total sem Desconto:</strong> R$ <?= $total ?></p>
        <p><strong>Valor do Desconto:</strong> R$ <?= $discountAmount ?></p>
        <p><strong>Total a Pagar:</strong> R$ <?= $totalAfterDiscount ?></p>
        <a href="index.php" class="button">Voltar</a>
    </div>
</body>
</html>
