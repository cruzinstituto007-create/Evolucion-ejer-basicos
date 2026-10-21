<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>MAYOR DE EDAD</title>
    </head>
    <body>

        <?php require __DIR__ . '/../menu.php'; ?>

        <h1>Comprobar edad</h1>

        <?php 
        
        $edad =18;

        if ($edad >= 18) {
            echo "eres mayor de edad";
        }
        else {
            echo "no eres mayor de edad";
        }

        ?>
    </body>
</html>