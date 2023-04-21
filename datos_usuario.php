<?php
session_start();
if(empty($_SESSION['nombreUsuario'])){
    header("Location: http://localhost/app/inicio_sesion.php");
}else{
    $nombreUsuario = $_SESSION['nombreUsuario'];
};

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <h1>Bienvenido <?php echo $nombreUsuario; ?></h1>
<body>
    
</body>
</html>