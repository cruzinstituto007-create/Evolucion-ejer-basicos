<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numeros invertidos</title>
</head>
<body>

    <?php require __DIR__ . '/../menu.php'; ?>

    <h1>Numeros del 1 al número indicado</h1>

    <?php 
        $num = 10;

        echo "del 1 al $num: <br>";

        for ($i = 1; $i <= $num; $i++) {
            echo $i . "";
        }

        echo "<br><br>Numeros invertidos: <br>";

        for ($i = $num; $i >= 1; $i--) {
            echo $i . "";
        }
        ?>

</body>
</html>