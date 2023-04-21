<?php

//$nombre = $_GET['nombreIn'];
$nombre = $_POST['nombreIn']; //Imprimir el nombre capurado en el archivo inicio.php
$edad = $_POST['edadIn'];
$ciudad = $_POST['ciudadIn'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $hola = 'Hola ' . $nombre . ', bienvenido a ' . $ciudad;
    echo "<h1>$hola</h1>";
    ?>
</body>

</html>