<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea N° 2</title>
</head>
<body>
    <h1>Ejercicios de la tarea N°2:</h1>

    <?php
    // variable
    $n = 2;

    // 1. es positivo?
    if($n > 0){
        echo "El N° es positivo";
    } else {
        echo "El N° es negativo";
    }

    // 2. mayor a 1 y menor a 10
    if($n > 1 && $n < 10){
        echo "El N° se encuentra entre 2 y 9";
    }

    // 3. mayor a 10 o menor a 2
    if($n > 10 || $n < 2){
        echo "El N° o es mayor a 10 o es menor a 2";
    }

  echo "\n\n";


    // 4. 
    $numero1 = 22;
    $numero2 = 20;

    if($numero1 > $numero2){
        echo $numero1 + $numero2;
        echo $numero1 - $numero2;
    } else if ($numero1 < $numero2){
        echo $numero2 * $numero1;
        echo $numero2 / $numero1;
    } else if ($numero1 == $numero2){
        echo "Los números ingresados son iguales";
    }


    ?>

</body>
</html>