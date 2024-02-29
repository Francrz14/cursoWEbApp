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
        $ciudad = "Linares";
        echo "<h2>Hola " .$nombre. " " .$apellido. "</h2>";
        echo "<h2>Edad $edad</h2>"; 
        echo "<h2>Ciudad $ciudad </h2>"; 
    ?>

    <?php
    function datos(){
        global $nombre, $apellido, $edad, $ciudad;
        echo "<h2>Hola " .$nombre. " " .$apellido. "</h2>";
        echo "<h2>Edad $edad</h2>"; 
        echo "<h2>Ciudad $ciudad </h2>";
        exit;
    }
    datos();
    ?>
</body>
</html>