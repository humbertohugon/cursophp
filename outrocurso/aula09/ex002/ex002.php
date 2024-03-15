<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $ano = isset($_GET['ano']) ?$_GET['ano']:1900;
            echo "Você nasceu em $ano!</br>";
            $idade = date("Y") - $ano;
            echo "E terá <strong>$idade anos</strong> no ano de " . date("Y") . "</br>";
            if ($idade < 16) {
                $tipovoto = "não vota.";
            }
            else {
                if (($idade >= 16 && $idade < 18) || ($idade > 65)) {
                    $tipovoto = "voto opcional.";
                }
                else {
                    $tipovoto = "voto obrigatório.";
                }
            }
            echo "Para essa idade, $tipovoto";
        ?>
    </main>    
</body>
</html>