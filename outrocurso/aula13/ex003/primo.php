<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Primo PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Resultado</h2>
        <?php 
            $num = $_GET['num'] ?? 1;
            $cont = 0;
            for ($pri = 1;$pri <= $num; $pri++) {
                if($num%$pri == 0) {
                    echo "$pri ";
                    $cont++;
                }
            }
            echo "<h3>Analisando o número $num...</h3>";
            echo "<p>Valores múltiplos: </p>";
            echo "<p>Total de múltiplos: $cont</p>";
            if ($cont == 2) {
                echo "<p>Resultado $num <strong>É PRIMO</strong></p>";
            }
            else {
                echo "<p>Resultado $num <strong>NÃO É PRIMO</strong></p>";
            }
        ?>
    </main>
</body>
</html>