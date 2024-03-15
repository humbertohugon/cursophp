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
        <?php 
            $dia = isset($_GET['ds'])?$_GET['ds']:0;
            switch ($dia) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "<p>Dia de semana! Levanta e vai estudar! :)</p>";
                    break;
                case 1:
                case 7:
                    echo "<p>Fim de semana, Dia de Roça, vai trabalhar! :@</p>";
                    break;
                default:
                    echo "<p>Dia da semana inválido!</p>";
            }
        ?>
    </main>
</body>
</html>