<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe seu Salário</h1>
        <?php 
            $salario = $_GET['salario'] ?? 0;
        ?>
        <form action="" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" min="0" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $minimo = 1380.00; 
            $salmin = intdiv($salario, $minimo);
            $resto = $salario % $minimo;
            echo "Quem recebe um salário de R$" . number_format($salario, 2, ",",".") . " ganha <strong>$salmin salários mínimos</strong> + R$" . number_format($resto, 2, ",", ".").".";
        ?>
    </section>
</body>
</html>