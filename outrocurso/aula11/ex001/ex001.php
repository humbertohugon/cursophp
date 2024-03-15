<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Contador</h1>
        <p>Contando de 0 até 20, pulando de 2 em 2</p>
        <?php 
            $c = 0;
            while ($c <= 20) {
                echo "$c</br>";
                $c = $c + 2;
            }
        ?>
    </main>
</body>
</html>