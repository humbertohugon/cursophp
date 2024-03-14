<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <?php 
            $tempo = $_GET['tempo'] ?? 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="tempo">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" min="0" value="<?=$tempo?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php
            $sobra = $tempo;
            // Total de Semanas
            $semana = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;
            // Total de Dias
            $dia = (int)($sobra / 86_400);
            $sobra = $sobra % 86_400;
            // Total de Horas
            $hora = (int)($sobra / 3_600);
            $sobra = $sobra % 3_600;
            // Total de Minutos
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;
            // Total de Segundos
            $segundo = $sobra;
            echo "<p>Analisando o valor que você digitou, <strong>$tempo segundos</strong> equivalem a um total de:";
            echo "<ul><li> $semana semanas";
            echo "<li> $dia dias";
            echo "<li> $hora horas";
            echo "<li> $minuto minutos";
            echo "<li> $segundo segundos</ul>";
        ?>
    </section>
</body>
</html>