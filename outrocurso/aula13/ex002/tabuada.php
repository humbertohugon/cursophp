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
            for ($c = 1; $c <= 10; $c++) {
                $res = $num * $c;
                echo "$num x $c = $res </br>";
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>