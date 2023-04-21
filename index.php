<?php
    //Declaración de variables
    $nombre = "Cesar";
    $apellido = 'Martinez';
    $edad = 19;
    $mayorEdad = true;
    $salario = 2000.34;

    //Imprimir un mensaje
    echo "Hola $nombre";
    echo '<br>';
    echo 'Hola ' . $nombre;

    //Creación de un Array
    $numerosPares = array(0,2,4,6,8);
    $numerosImpares = [1, 3, 5, 7, 9];

    echo '<br>';
    echo $numerosPares[1]. '<br>';
    echo $numerosImpares[2]. '<br>';

    //Arreglos con asignación de claves
    $persona = [
        "nombre"=>"Cesar",
        "apellido"=>"Martinez",
        "edad"=>19
    ];

    echo $persona["nombre"]. "<br>";
    echo "Imprimir el arreglo impar";
    echo '<br>';

    for($index=0;$index < 5; $index++){
        echo $numerosImpares[$index] . '<br>';
    }

    echo "Imprimir el arreglo par";
    echo '<br>';
    $index = 0;
    while($index < 5){
        echo $numerosPares[$index] . '<br>';
        $index++;
    }

    echo "Imprimir el arreglo par con DoWhile";
    echo '<br>';

    $index = 0;

    do{
        echo $numerosPares[$index] . '<br>';
        $index++;
    }while($index<5);

    echo "Imprimir el arreglo par con foreach";
    echo '<br>';

    foreach($numerosPares as $numero){ //$numero es la variable que se crea, $numeros pares el que se recorre
        echo $index.': '. $numero . '<br>';
        $index++;
    }

    echo "Imprimir el arreglo impar con foreach";
    echo '<br>';
    foreach ($numerosImpares as $posicion => $numero){
        echo $posicion . ': ' . $numero . '<br>';
    }

    if($persona['edad'] >= 18){

    }elseif($persona['edad'] >= 5 && $persona['edad'] <= 17){

    }else{

    }

    $opcion = 'a';
    switch($opcion){
        case 'a':
            //
            break;
        case 'b':
            //
            break;
        case 'b':
            //
            break;
    }


    //Creación de métodos o funciones
    function esMayorEdad($edad){
        if($edad >= 18){
            return 'SI';
        }else{
            return 'NO';
        }
    }

    echo '25 es mayor de edad: ' . esMayorEdad(25). '<br>';
    echo '16 es mayor de edad: ' . esMayorEdad(16). '<br>';

    function validadEdad($edad){
        if($edad >= 18){
            echo $edad . ' es mayor de edad: Si <br>';
        }else{
            echo $edad . ' es mayor de edad: No <br>';
        }
    }

    validadEdad(25);
    validadEdad(16);

    //La última línea del código (?...>) Se omite si solo se trabaja con php)
?>