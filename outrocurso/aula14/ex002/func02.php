<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função 002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado função soma</h1>
        <?php 
            function soma ($a, $b) {
                $s = $a + $b;
                return $s;
            }

            $x = 3;
            $y = 4;
            $r = soma($x, $y);
            echo "A soma entre $x e $y é igual a $r."
        ?>
    </main>
</body>
</html>