<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função 002 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Rotinas Externas</h2>
        <?php 
          include "funcoes.php";
          echo "<h1>Testando novas funções</h1>";
          ola();
          mostraValor(4);
          echo "<h2>Finalizando o Programa...</h2>";
        ?>
    </main>
</body>
</html>