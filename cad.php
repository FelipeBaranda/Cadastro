<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            $nome = $_REQUEST["nome"] ?? "sem nome";
            $sobrenome = $REQUEST ["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome </strong>! Cadastro concluído com sucesso!";
        ?>
    <p><a href="javascrip:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>
