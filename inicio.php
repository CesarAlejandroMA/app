<?php
    $personas = [
        ["nombre"=>"Juan", "ciudad"=>"Tunja", "edad"=> 20],
        ["nombre"=>"Ana", "ciudad"=>"Bogotá", "edad"=> 25],
        ["nombre"=>"Pedro", "ciudad"=>"Sogamoso", "edad"=> 17]
    ];

    $saludo = "Hola mundo";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $saludo; ?></h1>
    <?php
    /*
        foreach($personas as $persona){
            //$hola = 'Hola ' .$persona['nombre'].', bienvenido a '.$persona['ciudad'];
            // echo '<h2>';
            // echo $hola;
            // echo '</h2>';
            // echo '<br>';

            $hola = 'Hola ' .$persona['nombre'].', bienvenido a '.$persona['ciudad']. ' '.$persona['edad'];

            if($persona['edad']>=18){
                echo'<font color = "blue">';
                echo $hola.'</font><br>';
            }else{
                echo'<font color = "red">';
                echo $hola.'</font><br>';
            }

        }*/

        foreach($personas as $persona){

            $hola = 'Hola ' .$persona['nombre'].', bienvenido a '.$persona['ciudad']. ' '.$persona['edad'];

            if($persona['edad']>=18){
                echo '<h4 style="color: blue;">';
                echo $hola;
                echo '</h4>';
            }else{
                echo '<h4 style="color: red;">';
                echo $hola;
                echo '</h4>';
            }
        }

    ?>
    <form action="saludar.php" method="post"> 
        <!-- El acción es a donde llegan los datos(RUTA)
        con method="get" los datos viajan a través de la URL
        con method="post" los datos viajan por detras -->
        <div>
            <label>Nombre: </label>
            <input type="text" name="nombreIn" require>
        </div>
        <div>
            <label>Ciudad: </label>
            <select name="ciudadIn">
                <option>Bogotá</option>
                <option>Sogamoso</option>
                <option selected>Tunja</option>
            </select>
        </div>
        <div>
            <label>Edad: </label>
            <input type="number" name="edadIn" min="1" max="130" require>
        </div>
        <div>
            <button type="submit">Saludar</button>
        </div>
    </form>

</body>

</html>