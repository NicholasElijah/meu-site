<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Vendas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Vendas</h1>
        <form action="calculate.php" method="post">
            <label for="price">Preço do Produto (R$):</label>
            <input type="number" id="price" name="price" step="0.01" required>

            <label for="quantity">Quantidade:</label>
            <input type="number" id="quantity" name="quantity" required>

            <label for="discount">Desconto (%):</label>
            <input type="number" id="discount" name="discount" step="0.01">

            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>
