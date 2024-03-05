<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Multidimensionales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .contenido {
            width: 500px;
            height: 800px;
            text-align: center; 
            background-color: #f0f0f0; 
            padding: 20px;
            border: 3px solid black;
            border-top-left-radius: 20px; 
            border-bottom-right-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="contenido">

    <?php
    $agenda = array (
        array (
            "Nombre" => "Fran",
            "Teléfono" => 666666666,
            "Correo" => "ejemplo@gmail.com"
        ),
        array (
            "Nombre" => "Santiago",
            "Teléfono" => 77777777,
            "Correo" => "ejemplo2@gmail.com"
        ),
        array (
            "Nombre" => "Cristina",
            "Teléfono" => 88888888,
            "Correo" => "ejemplo3@gmail.com"
        )
        
    );

    //Mostrar resultados
    echo "Agenda de 3 contactos:<br>";
    echo "<hr>";

    foreach ($agenda as $contacto) {
        foreach ($contacto as $clave => $datos){
            echo $clave. ": ". $datos . "<br>";
        }
        echo "<br>";
    }

    //Añadir Contacto nuevo
    $agenda[] = array (
        "Nombre" => "Eduardo",
        "Teléfono" => 99999999,
        "Correo" => "ejemplo4@gmail.com"
    );
    echo "<hr>";

    foreach ($agenda as $contacto) {
        foreach ($contacto as $clave => $datos){
            echo $clave. ": ". $datos . "<br>";
        }
    }
    echo "<hr>";
    //Cambiamos el número de teléfono del primer contacto
    //Interactua con el 0 1 2 3 para cambiar el teléfono de los contacto disponibles
    $agenda[0]["Teléfono"] = 5555555555;
    foreach ($agenda as $contacto) {
        foreach ($contacto as $clave => $datos){
            echo $clave. ": ". $datos . "<br>";
        }
    }
    ?>
    </div>
</body>
</html>