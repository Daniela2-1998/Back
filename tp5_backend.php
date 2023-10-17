<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
<?php
    // 1. array con 10 primeros numeros pares y mostrar en pantalla
    $numerosPares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
    foreach ($numerosPares as $numeroPar) {
        print "<p>$numeroPar</p>\n";
    }

    print "<h3>Arreglo con nombres y números: </h3>\n";

    // 2. array con: Pedro, Ana, 34, 1. Mostrar con print_r()
    $arregloMixto = ["Pedro", "Ana", 34, 1];
    foreach ($arregloMixto as $mixto) {
        print "<p>$mixto</p>\n";
    }


    print "<h3>Arreglo asociativo: </h3>\n";

    // 3. array asociativo con: Nombre: Pedro, Apellido: Torres, Direccion: Av. Mayor 3703, Teléfono: 1122334455
    $datos=[
        'nombre'=> "Pedro",
        'apellido'=> "Torres",
        'direccion'=> "Av. Mayor 3703",
        'telefono'=> "1122334455"
    ];
    foreach ($datos as $dato) {
        print "<p>$dato</p>\n";
    }


    print "<h3>Arreglo de ciudades: </h3>\n";

    // 4. Array con ciudades: madrid, barcelona, londres, ny, la y chicago. Mostrar contenido. "La ciudad con el indice 0 tiene el nombre Madrid".
    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
    $indice = 0;
    foreach ($ciudades as $ciudad) {
        print "<p>La ciudad con el índice $indice tiene el nombre $ciudad</p>\n";
        $indice++;
    }


    print "<h3>Arreglo de ciudades con indice: </h3>\n";

    // 5. crear indices para el array anterior: MD, BCL, LD, NY, LA y CCG. Mostrar en pantalla los indices y ciudades.
    $datosCiudades=[
        'MD'=> "Madrid",
        'BCL'=> "Barcelona",
        'LD'=> "Londres",
        'NY'=> "New York",
        'LA'=> "Los Angeles",
        'CCG'=> "Chicago"
    ];

    foreach ($datosCiudades as $indiceC => $datoC) {
        print "<p>$datoC tiene el indice $indiceC</p>\n";
    }


?>

</body>
</html>