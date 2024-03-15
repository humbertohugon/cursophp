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
        <form action="parte2.php" method="get">
            <?php
                $cont = 1;
                while ($cont <= 5) {
                    echo "<label for='v1'>Valor $cont: </label>";
                    echo "<input type='number' name='v$cont' id='v1' max='100' min='0' value='0'>";
                    $cont = $cont + 1;
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
         

        
    </main>
</body>
</html>