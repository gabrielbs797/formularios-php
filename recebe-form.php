<?php
// 'isset()' verifica se uma variável existe
// $_GET guarda os dados qundo enviados por GET
// Dentro de [] colocamos o NAME de uma entrada para obter seu valor
// Esse IF verifica se o campo nome foi enviado por GET
if(isset($_GET["nome"])){
    echo "<h1>Campos enviados por GET:</h1>";
    echo "<ul><li>Nome: " . $_GET["nome"] . "</li>";
    // Podemos coloar o valor que veio por GET em outra variável
    $ano = $_GET["anoNascimento"];
    // 'date("Y")' retorna o ano atual do servidor
    $idade = date("Y") - $ano;
    echo "<li>Ano de nascimento: $ano </li>";
    echo "<li>Idade: $idade </li></ul>";
} else {
    echo "<h1 style='color: red;'>O servidor retornou um erro ao receber o formulário.</h1>";
    echo "<p>GET não recebeu a variável 'nome'.</p>";
}

// $_POST guarda os dados quando enviados por POST
// $_SERVER guarda dados do servidor e da requisição
if($_SERVER['REQUEST_METHOD'] == 'POST'){
echo "<h1>Campos enviados por POST:</h1>";
    echo "<ul><li>Nome: " . $_POST["nome"] . "</li>";
    // Podemos coloar o valor que veio por GET em outra variável
    $ano = $_POST["anoNascimento"];
    // 'date("Y")' retorna o ano atual do servidor
    $idade = date("Y") - $ano;
    echo "<li>Ano de nascimento: $ano </li>";
    echo "<li>Idade: $idade </li></ul>";
} else {
    echo "<h1 style='color: red;'>O servidor retornou um erro ao receber o formulário.</h1>";
    echo "<p>POST não recebeu a variável 'nome'.</p>";
}
?>

<pre>
<?php
// Olhe o resultado na página e descreva aqui o que aconteceu
// Imprimiu todo o conteúdo do array de requisição
print_r($_SERVER);
?>
</pre>