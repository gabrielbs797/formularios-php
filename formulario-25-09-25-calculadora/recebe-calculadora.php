<?php
// $_POST guarda os dados quando enviados por POST
// $_SERVER guarda dados do servidor e da requisição
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(($_POST['operacao']) == 'adicao'){
        $valor_final = $_POST["valor1"] + $_POST["valor2"];
    } else if(($_POST['operacao']) == 'subtracao'){
        $valor_final = $_POST["valor1"] - $_POST["valor2"];
    } else if(($_POST['operacao']) == 'multiplicacao'){
        $valor_final = $_POST["valor1"] * $_POST["valor2"];
    } else if(($_POST['operacao']) == 'divisao'){
        $valor_final = $_POST["valor1"] / $_POST["valor2"];
    }

    echo "<h1>A resposta da sua operação matemática é $valor_final </h1>";
} else {
    echo "<h1 style='color: red;'>O servidor retornou um erro ao receber o formulário.</h1>";
    echo "<p>POST não recebeu uma requisição do tipo 'POST'.</p>";
}
?>