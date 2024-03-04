<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>

        <?php
            // Cotação copiada do Google
            $cotação = 5.22;
            
            // Quanto $$ você tem?
            $real = $_GET["valor"] ?? 0;

            //Equivalência do dólar
            $dólar = $real / $cotação;

            //$padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus R$ " . number_format($real, 2, ",", ".") . " equivalem a US$ " . number_format($dólar, 2, ",", ".") . "</p>";

            echo "<p><strong>*Cotação fixa de R$ 5,22</strong> informada diretamente no código.</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>