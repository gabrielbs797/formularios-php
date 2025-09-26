<!doctype html>

<html lang="pt-BR">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulário de endereço</title>
</head>

<body class="p-3">
    <h1>Formulário de endereço</h1>

    <form method="POST" action="recebe-endereco.php">
        <div class="mb-3">
            <label for="logradouro" class="form-label">Logradouro:</label>

            <input type="text" class="form-control" id="logradouro" name="logradouro">
        </div>

        <div class="mb-3">
            <label for="numero" class="form-label">Número do edifício:</label>

            <input type="number" class="form-control" id="numero" name="numero">
        </div>

        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro:</label>

            <input type="text" class="form-control" id="bairro" name="bairro">
        </div>

        <div class="mb-3">
            <label for="cep" class="form-label">CEP:</label>

            <input type="number" class="form-control" id="cep" name="cep">
        </div>


        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>

            <input type="text" class="form-control" id="cidade" name="cidade">
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado:</label>

            <input type="text" class="form-control" id="estado" name="estado">
        </div>

        <a href="../index.php" class="btn btn-info">Voltar ao início</a>

        <button type="reset" class="btn btn-warning">Limpar entradas</button>

        <button type="submit" class="btn btn-success">Enviar para o PHP</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>