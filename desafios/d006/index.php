<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $dividendo = $_GET['divd'] ?? 0;
            $divisor = $_GET['divs'] ?? 1;
        ?>

        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="divd" id="divd" min="0" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divs" id="divs" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php
            $inteiro = intdiv($dividendo, $divisor);
            $sobra = $dividendo % $divisor;
            echo "<p>Dividindo o número $dividendo por $divisor dá o resultado <strong>$inteiro</strong>, com resto de <strong>$sobra</strong>.</p>";
        ?>
    </section>
</body>
</html>