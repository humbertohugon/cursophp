<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>

        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
    $num = rand(1,100);
    echo "<p>O valor gerado foi <strong>$num</strong> </p>";
    ?>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>