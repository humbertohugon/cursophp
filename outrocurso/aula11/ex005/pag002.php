<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Resultado</h2>
        <?php 
            $num = $_GET['num'] ?? 1;
            echo "Mostrando a Tabuada de <strong>$num</strong>";
            $tab = 1;
            $res = $num * $tab;
            while ($tab <= 10) {
                echo "<p>$num x $tab = $res</p>";
                $tab = $tab + 1;
                $res = $num * $tab;  
            }
        ?>
        <a href="index.php">Voltar</a>
    </main>
</body>
</html>