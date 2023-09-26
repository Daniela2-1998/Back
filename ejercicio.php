<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea N°1 PHP</title>
</head>
<body>
    <h1>Ejercicios de PHP</h1>
    
    <?php
       // 1. Imprimir en pantalla "Hola mundo"
       echo "Hola mundo";

       // 2. Imprimir variable con "Hola mundo"
       $Saludo = "Hola Mundo";
       echo "\n" . $Saludo;

       // 3. Crear 2 variables enteras y hacer cuentas
       $Num1 = 4;
       $Num2 = 2;

       $Suma = $Num1 + $Num2;
       $Resta = $Num1 - $Num2;
       $Multi = $Num1 * $Num2;
       $Divi = $Num1 / $Num2;
       $RestoDiv = $Divi - $Suma;

       echo "\n\n Los resultados son: ";
       echo "\n Suma:" . $Suma . "\n Resta: " . $Resta . "\n Multiplicación: " . $Multi .
       "\n División: " . $Divi . "\n División menos la suma de ambos números da: " . $RestoDiv;
       
       // 4. De Celsius a Fahrenheit para 20°C.
       $Celsius = 20;
       $Fahrenheit = 32;

       $PaseDeGrados = ($Celsius * 9/5) + $Fahrenheit;
       echo $PaseDeGrados;

       // 5. Algorítmos
       $Base = 18;
       $Altura = 12;

       $Perimetro = ($Altura + 2) + ($Base * 2);
       $Area = $Altura * $Base;

       $Radio = 30;

       $AreaCirculo = 3.14 * $Radio^2;
       $PerimetroCirculo =  2 * 3.14 * $Radio;

       echo "\n El perímetro del rectangulo es de " . $Perimetro .
       " y su área " . $Area . ". En caso del círculo, su perímetro es " 
       . $PerimetroCirculo . " y su área " . $AreaCirculo;
    ?>

</body>
</html>


