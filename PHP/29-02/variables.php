<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = "Fran";
        $apellido = "Ropero";
        $edad = 38;
        echo "<h2>Hola " .$nombre. " " .$apellido. "</h2>";
        echo "<h2>Edad $edad</h2>";  
    ?>

    <?php
    function datos(){
        global $nombre, $apellido, $edad;
        echo "<h2>Hola " .$nombre. " " .$apellido. "</h2>";
        echo "<h2>Edad $edad</h2>"; 
    }
    datos();
    ?>
</body>
</html>