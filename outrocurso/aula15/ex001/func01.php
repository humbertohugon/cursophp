<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função 001 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Passagem por Valor</h2>
        <?php 
            function teste($x) {
                $x += 2;
                echo "<p>O valor de X é $x.</p>";
            }

            $a = 3;
            teste($a);
            echo "<p>O valor de A é $a.</p>";
        ?>
        <h2>Passagem por Referência</h2>
        <?php 
            function testes(&$z) {
                $z += 2;
                echo "<p>O valor de Z é $z.</p>";
            }

            $b = 3;
            testes($b);
            echo "<p>O valor de B é $b.</p>";
        ?>
    </main>
</body>
</html>