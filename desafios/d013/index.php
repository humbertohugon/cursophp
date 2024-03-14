<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        <?php 
            $saque = $_GET['saque'] ?? 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" min="0" step="5" value="<?=$saque?>">
            <h6>*Notas disponíveis: R$100, R$50, R$10 e R$5</h6>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
    	<?php
            $din = $saque;
            // Total de 100 
            $cem = (int)($din/100);
            $din = $din % 100;
            // Total de 50
            $cinquenta = (int)($din/50);
            $din = $din % 50;
            // Total de 10
            $dez = (int)($din/10);
            $din = $din % 10;
            // Total de 5
            $cinco = (int)($din/5);
            $din = $din % 5;
            echo "<h2>Saque de R$" . number_format($saque, 2, ",",".") . " realizado</h2>";
            echo "<p>O caixa eletrônico vai te entregar às seguintes notas:</p>";
            echo "<ul><li>100 Reais x$cem";
            echo "<li> 50 Reais x$cinquenta";
            echo "<li> 10 Reais x$dez";
            echo "<li> 5 Reais x$cinco</ul>";
        ?>
    </section>
</body>
</html>