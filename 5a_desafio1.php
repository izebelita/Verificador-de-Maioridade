<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $anoNascimento = $_POST["ano_nascimento"];

    $anoAtual = date("Y");
    $idade = $anoAtual - $anoNascimento;

    if ($idade >= 18) {

        echo "<h2>Acesso permitido, $nome!</h2>";

        $dados = "Nome: $nome | Idade: $idade anos\n";

        file_put_contents("log_acessos.txt", $dados, FILE_APPEND);

    } else {

        echo "<h2>Acesso negado, $nome!</h2>";

    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Verificador de Maioridade</title>
</head>

<body>

    <h1>Verificador de Maioridade</h1>

    <form method="POST">

        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required>

        <br><br>

        <label for="ano_nascimento">Ano de Nascimento:</label><br>
        <input type="number" id="ano_nascimento" name="ano_nascimento" required>

        <br><br>

        <button type="submit">Verificar</button>

    </form>

</body>

</html>
