<?php
// $_POST guarda os dados quando enviados por POST
// $_SERVER guarda dados do servidor e da requisição
if($_SERVER['REQUEST_METHOD'] == 'POST'){
echo "<h1>Campos enviados por POST:</h1>";
    echo "<ul><li>Logradouro: " . $_POST["logradouro"] . "</li>";
    echo "<li>Número do edifício: " . $_POST["numero"] . "</li>";
    echo "<li>Bairro: " . $_POST["bairro"] . "</li>";
    echo "<li>CEP: " . $_POST["cep"] . "</li>";
    echo "<li>Cidade: " . $_POST["cidade"] . "</li>";
    echo "<li>Estado: " . $_POST["estado"] . "</li></ul>";
} else {
    echo "<h1 style='color: red;'>O servidor retornou um erro ao receber o formulário.</h1>";
    echo "<p>POST não recebeu uma requisição do tipo 'POST'.</p>";
}
?>