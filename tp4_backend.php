<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Tarea N°2: estructuras de control</h1>

    <?php
       //1. mostrar del 1 al 100
       $a = 1;
       while ($a <= 100) {
        print "<p>$a</p>\n";
        $a++;
       }

       //2. mostrar del 100 al 1
       $b = 100;
       while ($b >= 1) {
        print "<p>$b</p>\n";
        $b--;
       }

      //3. mostrar numeros pares del 1 al 100
      for ($c = 2; $c <= 100; $c+2) {
        print "<p>$c</p>\n";
      }

      //4. mostrar numeros impares del 1 al 100
      for ($d = 1; $d <= 100; $d+2) {
        print "<p>$d</p>\n";
      }

      //5. mostrar la suma de los numeros de 1 a 20
      $suma = 0;
      for ($numeros=1; $numeros <= 20; $numeros++) {
        $suma= $suma + $numeros;
        print "<p>$suma/p>\n";
      }

      //6. mostrar la suma de los numeros pares de 1 a 20
      $sumaPar = 0;
      for ($numerosPares=2; $numerosPares <= 20; $numerosPares+2) {
        $sumaPar= $sumaPar + $numerosPares;
        print "<p>$sumaPar/p>\n";
      }
    ?>


</body>

</html>