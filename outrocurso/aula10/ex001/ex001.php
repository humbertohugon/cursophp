<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $num = isset($_GET['num'])?$_GET['num']:0;
            $oper = isset($_GET['oper'])?$_GET['oper']:1;
            switch ($oper) {
                case 1:
                    $resultado = $num * 2;
                    break;
                case 2:
                    $resultado = $num ** 3;
                    break;
                case 3:
                    $resultado = $num ** (1/2);
            }
            echo "<p>O resultado da operação solicitada foi <strong>$resultado</strong></p>"
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>