<?php

require '../models/usuario.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/UsuariosController.php';

use usuario\Usuario;
use usuarioController\UsuarioController;

$id = empty($_GET['id'])?'' : $_GET['id']; //Si es vacio
//lee los '' vacios, en caso contrario lee el $_GET
$titulo = 'Registrar Usuario';
$urlAction = "accion_registro_usuario.php";
$usuario = new Usuario();
if (!empty($id)){
    $titulo = 'Modificar Usuario';
    $urlAction = "accion_modificar_usuario.php";
    $usuarioController = new UsuarioController();
    $usuario = $usuarioController->readRow($id);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <form action="<?php echo $urlAction; ?>" method="post">
        <label>
            <span>Id:</span>
            <input type="number" name="id" min="1" value="<?php echo $usuario->getId();?>" require>
        </label>
        <br>
        <label>
            <span>Nombre:</span>
            <input type="text" name="name" value="<?php echo $usuario->getName();?>" require>
        </label>
        <br>
        <label>
            <span>Usuario:</span>
            <input type="text" name="username" value="<?php echo $usuario->getUsername();?>" require>
        </label>
        <br>
        <label>
            <span>Contraseña:</span>
            <input type="password" name="password" require>
        </label>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>