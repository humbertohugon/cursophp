<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe um número</h1>
        <?php 
            $num = $_GET['num'] ?? 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $quad = $num ** (1/2);
            $cub = $num ** (1/3); 
            echo "<p>Analisando o <strong>número $num</strong>, temos:</p>";
            echo "<ul><li>A sua raíz quadrada é <strong>" . number_format($quad, 3, ",",".") . "</strong> </ul>";
            echo "<ul><li>A sua raíz cúbica é <strong>" . number_format($cub, 3, ",",".") . "</strong> </ul>"
        ?>
    </section>
</body>
</html>