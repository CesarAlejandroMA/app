<?php

require '../models/usuario.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/UsuariosController.php';

use usuarioController\UsuarioController;

$usuarioController = new UsuarioController();
$resultado = $usuarioController->delete($_GET['id']);
if($resultado){
    echo '<h1>Usuarios borrado</h1>';
}else{
    echo '<h1>No se pudo borrar el usuario</h1>';
}

?>