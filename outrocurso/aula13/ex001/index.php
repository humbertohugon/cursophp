<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício for PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            for ($i = 1; $i <= 10; $i++) {
                echo "$i ";
            }
            echo "<br/>";
            for ($i = 10; $i >= 1; $i--) {
                echo "$i ";
            }
            echo "</br>";
            for ($i = 0; $i <= 50; $i+=5) {
                echo "$i ";
            }
            echo "</br>";
            for ($i = 30; $i >= 10; $i-=2) {
                echo "$i ";
            }
        ?>
    </main>
</body>
</html>