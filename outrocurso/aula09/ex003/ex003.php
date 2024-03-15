<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Resultado</h2>
        <?php 
        $n1 = $_GET['nota1'] ?? 0; 
        $n2 = $_GET['nota2'] ?? 0;
        $media = ($n1 + $n2)/ 2;
        echo "<p>A média entre <strong>" . number_format($n1, 1, ",",".") . "</strong> e <strong>" . number_format($n2, 1, ",",".") . "</strong> é igual a <strong>" . number_format($media, 1,",",".") . "</strong></p>";
        if ($media < 4) {
            $situacao = "REPROVADO";
        }
        elseif ($media >= 4 && $media < 6) {
            $situacao = "RECUPERAÇÃO";
        }
        else {
            $situacao = "APROVADO";
        }
        echo "<p>Situação do aluno: <strong>$situacao</strong></p>"
        ?>
    </main>
</body>
</html>