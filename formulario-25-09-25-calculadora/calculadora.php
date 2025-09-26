<!doctype html>

<html lang="pt-BR">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulário de calculadora</title>
</head>

<body class="p-3">
    <h1>Formulário de calculadora</h1>

    <form method="POST" action="recebe-calculadora.php">
        <div class="mb-3">
            <label for="valor1" class="form-label">Valor 1:</label>

            <input type="number" class="form-control" id="valor1" name="valor1">
        </div>

        <div class="mb-3">
            <label for="valor2" class="form-label">Valor 2:</label>

            <input type="number" class="form-control" id="valor2" name="valor2">
        </div>

        <div class="mb-3">
            <label for="operacao" class="form-label">Operação matemática:</label>
            <select name="operacao" id="operacao" class="form-control">
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
        </div>

        <a href="../index.php" class="btn btn-info">Voltar ao início</a>

        <button type="reset" class="btn btn-warning">Limpar entradas</button>

        <button type="submit" class="btn btn-success">Enviar para o PHP</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>