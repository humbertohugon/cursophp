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
        <h2>Resultado</h2>
        <?php 
            $i = $_GET['inicio'] ?? 0;
            $f = $_GET['final'] ?? 0;
            $inc = $_GET['incremento'] ?? 1;
            echo " $i ";
            if ($i < $f) {
                while ($i <= $f) {

                    $i = $i + $inc;
                    if($i <= $f) {
                        echo " $i ";  
                    }
                }
            }
            else {
                while ($i >= $f) {
                    $i = $i - $inc;
                    if ($i >= $f) {
                        echo " $i ";
                    }
                }
            }
        ?>
        <br>
        <br>
        <a href="ex003.html">Voltar</a>
    </main>
</body>
</html>