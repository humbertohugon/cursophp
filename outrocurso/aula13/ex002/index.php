<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada usando For</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Tabuada</h1>
        <form action="tabuada.php" method="get">
            <label for="numero">Número: </label>
            <select name="num" id="num">
                <?php 
                    for($c = 1; $c <= 10; $c++) {
                        echo "<option>$c</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </main>
</body>
</html>