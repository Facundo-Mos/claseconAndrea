<?php

/**
 * dato un insieme di valori, trovare il numero piu alto
 */

$valori= [1, 3, 5, 2, 5, 3, 9, 4, 7];
$mayor = $numeros[0];
$i = 1;

while ($i < count($numeros)) {
    if ($numeros[$i] > $mayor) {
        $mayor = $numeros[$i];
    }
    $i++;
}

echo "El número más alto es: " . $mayor;
?>


<?php

/*
Stampa tutti gli elementi, finche l' elemnto corrente è inferiori a 15
*/
$valori = [12, 13, 5, 12, 15, 3, 19, 4, 17];

for ($i = 0; $i <count ($valori); $i++)
    if ($valori[$i] < 15 ) :
        $output .= $valori[$i] . " ";
    else :
        break;
    endif;
endfor 



$persone = [
    array(
        "nome" => "Mario"
        "eta" => 19
    ),
    array(
        "nome" => "Rosa"
        "eta" => 21
    ),
    array(
        "nome" => "Lucia"
        "eta" => 14
    ).
    array(
        "nome" => "Francesco"
        "eta" => 24
    ),
    array(
        "nome" => "Giuseppe"
        "eta" => 16
    ),
    array(
        "nome" => "marta"
        "eta" => 22
    ).
];


foreach ($persone as $persona) :
    if ($persona ["eta"] >= 18) :
        echo "<li>" .$persona ["nome"]."</li>"
    endif;
    $anni += $persona["eta"];
endforeach;


/*

data l'età di una persona, retorna se puo guidare il 125

*/





?>