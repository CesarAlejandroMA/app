<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Registrar Usuario</h1>
    <form action="accion_registro_usuario.php" method="post">
        <label>
            <span>Id:</span>
            <input type="number" name="id" min="1" require>
        </label>
        <br>
        <label>
            <span>Nombre:</span>
            <input type="text" name="name" require>
        </label>
        <br>
        <label>
            <span>Usuario:</span>
            <input type="text" name="username" require>
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