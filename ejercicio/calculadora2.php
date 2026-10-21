<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>

    <?php require __DIR__ . '/../menu.php'; ?>

    <h1>Calculadora</h1>

    <?php 
        $num1 = 10;
        $num2 = 5;

        echo "el primer valor es $num1" . "<br>";
        echo " el segundo valor es $num2" . "<br>";
        echo "suma:" . ($num1 + $num2) . "<br>";
        echo "resta:" . ($num1 - $num2) . "<br>";
        echo "multiplicación:" . ($num1 * $num2) . "<br>";
        echo "división:" . ($num1 / $num2) . "<br>";
        ?>

</body>
</html>