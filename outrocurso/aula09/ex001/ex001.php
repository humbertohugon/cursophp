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
            if($idade >= 18) {
                $voto = "já pode votar";
                $dirigir = "já pode dirigir!";
            }
            else{
                $voto = "não pode votar";
                $dirigir = "não pode dirigir!";
            }
            echo "Com essa idade você $voto e $dirigir";
        ?>
    </main>    
</body>
</html>