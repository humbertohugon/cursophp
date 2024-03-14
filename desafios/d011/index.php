<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Reajustador de Preços</h1>
        <?php 
            $preco = $_GET['preco'] ?? 0;
            $porcento = $_GET['porcento'] ?? 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="precos">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0" value="<?=$preco?>">
            <label for="porcentos">Qual será o porcentual de reajuste?</label>
            <input type="number" name="porcento" id="porcento" min="0" max="100" value="<?=$porcento?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php
            $reajuste = (($preco*$porcento)/ 100) + $preco; 
            echo "<p>O produto que custava R$" . number_format($preco, 2, ",",".") . ", com <strong>$porcento% de aumento</strong> vai passar a custar <strong>R$" . number_format($reajuste, 2, ",",".") . "</strong> a partir de agora.</p>"
        ?>
    </section>
</body>
</html>