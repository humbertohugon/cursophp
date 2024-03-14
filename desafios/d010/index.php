<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculando a sua idade</h1>
        <?php
            $atual = date("Y");
            $anon = $_GET['anon'] ?? '2000';
            $anor = $_GET['anor'] ?? $atual; 
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que no você nasceu?</label>
            <input type="number" name="anon" id="anon" min="1900" max="<?=$atual?>" value="<?=$anon?>">
            <label for="anorandom">Quer saber sua idade em que ano? (atualmente estamos em <strong>2024</strong>)</label>
            <input type="number" name="anor" id="anor" min="1900" value="<?=$anor?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultdo">
        <h2>Resultado</h2>
        <?php
            $idade = $anor - $anon; 
            echo "<p>Quem nasceu em $anon vai ter <strong>$idade anos</strong> em $anor!</p>"
        ?>
    </section>
</body>
</html>