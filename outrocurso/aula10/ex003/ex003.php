<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $estado = isset($_GET['estado'])?$_GET['estado']:0;
            switch ($estado) {
                case 1:
                    echo "<p>Você mora na <strong>Região Sudeste!</strong></p>";
                    break;
                case 2:
                    echo "<p>Você mora na <strong>Região Nordeste!</strong></p>";
                    break;
                case 3:
                    echo "<p>Você mora na <strong>Região Norte!</strong></p>";
                    break;
                case 4:
                    echo "<p>Você mora na <strong>Região Centro-Oeste!</strong></p>";
                    break;
                case 5:
                    echo "<p>Você mora na <strong>Região Sul!</strong></p>";
            }
        ?>
        <a href="ex003.html">Voltar</a>
    </main>
</body>
</html>