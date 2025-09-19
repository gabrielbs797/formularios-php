<!doctype html>

<html lang="pt-BR">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulário com GET</title>
</head>

<body class="p-3">
    <h1>Formulário com GET</h1>

    <form method="GET" action="recebe-form.php">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>

            <input type="text" class="form-control" id="nome" name="nome">
        </div>

        <div class="mb-3">
            <label for="anoNascimento" class="form-label">Ano de nascimento:</label>

            <input type="number" class="form-control" id="anoNascimento" name="anoNascimento">
        </div>

        <a href="index.php" class="btn btn-info">Voltar ao início</a>

        <button type="reset" class="btn btn-warning">Limpar entradas</button>

        <button type="submit" class="btn btn-success">Enviar para o PHP</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>