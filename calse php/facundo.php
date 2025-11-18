<?php
    //comento en linea
    /*  
    comentario largo
    */

    /*  STING*/
    echo "<h1>Hola mundo</h1>";
    //echo sirve para hacer un output de cualquier cosa
    echo "<h2 class='classe' attr=\"esto me permite hacer usar las comillas de nuevo\">Tipos di Dato</h2>";


    echo true;  //booleano verdadere genera algo en el caso que el dato sea correcto/verdadero
    echo false;

    //  NUMEROS 
    // no hace falta explicar que son numeros porque PHP los interpreta
    echo 10;
    echo "\n"; //sirve para dejar el espacio en el php pero no en el documento, para separar lineas usamos br de HTML
    echo 1.15; //decimales

    /*variable*/
    $nombre_variable;            //el primer caracter no puede ser un numero y no se pueden usar espacios guion bajo si, pero el guion normal no sirve
    $nombreVariable;  //si no pongo el guion, puedo separar el nombre de la variable con la mayuscula
    //ARRAY
    $array = (1, 2, 3, 4, 5) //array anonimo accede al valor del indice
    $array_1 = array(1, 2, 3, 4, 5)
    //Array con llaver para acceder a los valores
    $array_2 = array(
        "nome" => "Mario"
        "cognome" => "Rossi"
        "età" => 21
    );

    echo $array_2 //no estampa los datos
    // estos estampas todo
    print_r($array_2)
    var_dump($array_2)
?>
