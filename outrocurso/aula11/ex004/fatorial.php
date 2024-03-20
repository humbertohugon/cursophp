<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $val = $_GET['val'] ?? 1;
            echo "<h1> Calculando o fatorial de $val</h1>";
            $cont = $val;
            $fat = 1;
            do {
                $fat = $fat * $cont;
                $cont = $cont - 1;
            } while ($cont >= 1);
            echo "<h2>$val ! = $fat</h2>"
        ?>
        <a href="contador.php">Voltar</a>
    </main>
</body>
</html>