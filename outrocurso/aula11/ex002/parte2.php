<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Valores</h1>
        <?php 
            $cont = 1;
            while ($cont <= 5) {
                $v = "num" . $cont;
                $url = "v" . $cont;
                $$v = isset($_GET[$url])?$_GET[$url]:0;
                $cont = $cont + 1;
            }
        ?>

        <?php 
            $cont = 1;
            while ($cont <= 5) {
                $v = "num" . $cont;
                echo "Valor $cont : " . $$v . "</br>";
                $cont = $cont + 1;
            }
        ?>
    </main>
</body>
</html>