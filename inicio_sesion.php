<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
</head>

<body>
    <h1>Iniciar sesión</h1>
    <form action="validar_sesion.php" method="post">
        <div>
            <label>Usuario</label>
            <input type="text" name="usr" require>
        </div>
        <div>
            <label>Contraseña</label>
            <input type="password" name="pwd" require>
        </div>
        <div>
            <button type="submit">Iniciar Sesión</button> <!-- submit: Desplegar los datos -->
        </div>
    </form>
</body>
</html>