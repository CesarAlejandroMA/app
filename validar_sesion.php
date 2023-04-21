<?php

include 'conexion_bd.php'; 

$usr = $_POST['usr'];
$pwd = $_POST['pwd'];

session_start(); //Crear variables de sesión
$conexionBD = new ConexionDb();
if($conexionBD->validarConexion()){
    die("Error de conexión " . $conexionBD->validarConexion());
}else{
    $sql = 'select * from usuarios';
    $sql .=' where username="' . $usr . '"';
    $sql .=' and password="' . $pwd . '"';
    $usuarios = $conexionBD->execSQL($sql);
    if($usuarios->num_rows > 0){ //$usuarios contiene los campos del registro
        while($usuario = $usuarios->fetch_assoc()){
            $_SESSION['nombreUsuario'] = $usuario['name'];
            break; //Sirve para que recorra solo una vez el ciclo
        }
        $conexionBD->close();
        header('Location: http://localhost/app/datos_usuario.php');
    }else{
        echo '<h1>Datos incorrectos</h1>';
        $conexionBD->close();
        session_destroy();
    }
}

/*
$server_db='127.0.0.1';
$user_db = 'root';
$pwd_db = '';
$name_db = 'ejemplo_db';

$conn = new mysqli($server_db, $user_db, $pwd_db, $name_db);
if($conn->connect_error){
    die("Error de conexión ".$conn->connect_error);
}else{

    $sql = 'select * from usuarios where username="'.$usr.'" and password="' . $pwd . '"';
    $usuarios = $conn->query($sql);
    if($usuarios->num_rows>0){
        while($usuario = $usuarios->fetch_assoc()){
            $_SESSION['nombreUsuario'] = $usuario['name'];
            break;
        }
        header('Location: http://localhost/app/datos_usuario.php');
        $conn->close();
    }else{
        echo '<h1>Datos incorrectos</h1>';
        $conn->close();
        session_destroy();
    }

    // if($usr == 'admin' && $psw == '12345'){
    //     $_SESSION['nombreUsuario'] = 'Administrador';
    //     // echo '<h1>Sesión Iniciada</h1>';
    //     header('Location: http://localhost/app/datos_usuario.php');
    // }else{
    //     echo '<h1>Datos incorrectos</h1>';
    //     session_destroy();
    // }

}
*/

?>