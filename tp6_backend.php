<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de ropa</title>
</head>
<body>
    <h1>Tienda de ropa</h1>
    <h2>Lista de ropa en stock:</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Talle</th>
            <th>Precio</th>
        </tr>
    

<?php
// Conexión + visualización en tabla
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");


$consulta= "SELECT * FROM ropa";

$datos= mysqli_query ($conexion, $consulta);

while ( $reg= mysqli_fetch_array($datos) ) {
    ?>
<tr>
    <td><?php echo $reg['id']; ?></td>
    <td><?php echo $reg['prenda']; ?></td>
    <td><?php echo $reg['marca']; ?></td>
    <td><?php echo $reg['talle']; ?></td>
    <td><?php echo $reg['precio']; ?></td>
</tr>.
<?php } ?>
</table>


<?php 

// 1. Insertar datos
$insertar1 = "INSERT INTO ropa values (5, buzo, nike, xxl, 600)";
$insertar2 = "INSERT INTO ropa values (5, buzo, adidas, l, 400)";

// 2.

// a. Listar todo (arriba en la tabla)

// b. Listar por buzo
$consultaBuzos= "SELECT * FROM ropa WHERE prenda = 'buzo'";

$datos1= mysqli_query ($conexion, $consultaBuzos);

?>
<h2>Listado de buzos:</h2>
<table border="1">
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Talle</th>
            <th>Precio</th>
        </tr>
<?php

while ( $reg= mysqli_fetch_array($datos1) ) {
    ?>
  
<tr>
    <td><?php echo $reg['id']; ?></td>
    <td><?php echo $reg['prenda']; ?></td>
    <td><?php echo $reg['marca']; ?></td>
    <td><?php echo $reg['talle']; ?></td>
    <td><?php echo $reg['precio']; ?></td>
</tr>.
<?php } 

?>
</table>
<?php

// c. Listar registros por marca Nike
$consultaNike= "SELECT * FROM ropa WHERE marca = 'nike'";

$datos2= mysqli_query ($conexion, $consultaNike);

?>
<h2>Listado de ropa marca Nike:</h2>
<table border="1">
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Talle</th>
            <th>Precio</th>
        </tr>
<?php

while ( $reg= mysqli_fetch_array($datos2) ) {
    ?>
  
<tr>
    <td><?php echo $reg['id']; ?></td>
    <td><?php echo $reg['prenda']; ?></td>
    <td><?php echo $reg['marca']; ?></td>
    <td><?php echo $reg['talle']; ?></td>
    <td><?php echo $reg['precio']; ?></td>
</tr>.
<?php } 

?>
</table>
<?php


// d. Listar registros con precio mayor a 500
$consultaPrecio= "SELECT * FROM ropa WHERE precio > '500'";

$datos3= mysqli_query ($conexion, $consultaPrecio);

?>
<h2>Listado de ropa con precio superior a 500:</h2>
<table border="1">
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Talle</th>
            <th>Precio</th>
        </tr>
<?php

while ( $reg= mysqli_fetch_array($datos3) ) {
    ?>
  
<tr>
    <td><?php echo $reg['id']; ?></td>
    <td><?php echo $reg['prenda']; ?></td>
    <td><?php echo $reg['marca']; ?></td>
    <td><?php echo $reg['talle']; ?></td>
    <td><?php echo $reg['precio']; ?></td>
</tr>.
<?php } 

?>
</table>
<?php

?>


</body>
</html>