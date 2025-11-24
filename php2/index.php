<?php

    /**
     * Es 01
     * Dati due numeri, stampare nell'ordine:
     *  - Somma
     *  - Differenza
     *  - Moltiplicazione
     *  - Divisione
     */
    $a = 12;
    $b = 24;
    
    $somma = $a + $b;
    $differenza = $a - $b;
    $moltiplicazione = $a * $b;
    $divisione = $a / $b;

    ?>
        <div>
            <h2>Esercizio 01</h2>
            <ul>
                <li><strong>Somma:</strong> <?php echo $somma; ?></li>
                <li><strong>Differenza:</strong> <?php echo $differenza; ?></li>
                <li><strong>Moltiplicazione:</strong> <?php echo $moltiplicazione; ?></li>
                <li><strong>Divisione:</strong> <?php echo $divisione; ?></li>
            </ul>
        </div>
    <?php

    /**
     * Es 02
     * Data una parola, verificare se è uguale
     * a "casa"
     */
    $parola = "albero";

    ?> 
        <div>
            <h2>Esercizio 02</h2>
            <p>
                <?php
                    if ($parola == "casa") {
                        echo "La parola è \"Casa\"";
                    } else {
                        echo "La parola è diversa da \"Casa\"";
                    }
                ?>
            </p>
        </div>
    <?php

    /** 
     * Es 03
     * Dato due valori numerici, verificarne l'uguaglianza
     */
    $c = "145";
    $d = 145;

    ?>
        <div>
            <h2>Esercizio 03</h2>
            <h3>Uguaglianza per valore</h3>
            <p>
                <?php
                    if ($c == $d) {
                        echo "C è uguale a D";
                    } else {
                        echo "C è diverso da D";
                    }
                ?>
            </p>
            <h3>Uguaglianza per tipo e valore</h3>
            <p>
                <?php
                    if ($c === $d) {
                        echo "C è uguale a D";
                    } else {
                        echo "C è diverso da D";
                    }
                ?>
            </p>
        </div>
    <?php
    
    /**
     * Es 04
     * Converti il voto in un giudizio:
     * - Da 0 a 5	-> Insufficiente
     * - 6 			-> Sufficiente
     * - 7 o 8		-> Buono
     * - 9 			-> Ottimo
     * - 10			-> Eccellente
     */
    $voto = 6;

    $giudizio = false;

    if ($voto <= 5) :
        $giudizio = 'insufficiente';
    elseif ($voto == 6) :
        $giudizio = 'sufficiente';
    elseif ($voto == 7 or $voto == 8) :
        $giudizio = 'buono';
    elseif ($voto == 9) :
        $giudizio = 'ottimo';
    elseif ($voto == 10) :
        $giudizio = 'eccellente';
    endif;

    ?>
    
        <div>
            <h2>Esercizio 04</h2>
            <p>Il giudizio è: <?php echo $giudizio; ?></p>
        </div>
    
    <?php


    /**
     * Es 01
     * Dati due numeri, stampare nell'ordine:
     *  - Somma
     *  - Differenza
     *  - Moltiplicazione
     *  - Divisione
     */
    $a = 12;
    $b = 24;
    
    $somma = $a + $b;
    $differenza = $a - $b;
    $moltiplicazione = $a * $b;
    $divisione = $a / $b;

    ?>
        <div>
            <h2>Esercizio 01</h2>
            <ul>
                <li><strong>Somma:</strong> <?php echo $somma; ?></li>
                <li><strong>Differenza:</strong> <?php echo $differenza; ?></li>
                <li><strong>Moltiplicazione:</strong> <?php echo $moltiplicazione; ?></li>
                <li><strong>Divisione:</strong> <?php echo $divisione; ?></li>
            </ul>
        </div>
    <?php

    /**
     * Es 02
     * Data una parola, verificare se è uguale
     * a "casa"
     */
    $parola = "albero";

    ?> 
        <div>
            <h2>Esercizio 02</h2>
            <p>
                <?php
                    if ($parola == "casa") {
                        echo "La parola è \"Casa\"";
                    } else {
                        echo "La parola è diversa da \"Casa\"";
                    }
                ?>
            </p>
        </div>
    <?php

    /** 
     * Es 03
     * Dato due valori numerici, verificarne l'uguaglianza
     */
    $c = "145";
    $d = 145;

    ?>
        <div>
            <h2>Esercizio 03</h2>
            <h3>Uguaglianza per valore</h3>
            <p>
                <?php
                    if ($c == $d) {
                        echo "C è uguale a D";
                    } else {
                        echo "C è diverso da D";
                    }
                ?>
            </p>
            <h3>Uguaglianza per tipo e valore</h3>
            <p>
                <?php
                    if ($c === $d) {
                        echo "C è uguale a D";
                    } else {
                        echo "C è diverso da D";
                    }
                ?>
            </p>
        </div>
    <?php
    
    /**
     * Es 04
     * Converti il voto in un giudizio:
     * - Da 0 a 5	-> Insufficiente
     * - 6 			-> Sufficiente
     * - 7 o 8		-> Buono
     * - 9 			-> Ottimo
     * - 10			-> Eccellente
     */
    $voto = 11;

    $giudizio = false;

    if ($voto >= 0 and $voto <= 5) :
        $giudizio = 'insufficiente';
    elseif ($voto == 6) :
        $giudizio = 'sufficiente';
    elseif ($voto == 7 or $voto == 8) :
        $giudizio = 'buono';
    elseif ($voto == 9) :
        $giudizio = 'ottimo';
    elseif ($voto == 10) :
        $giudizio = 'eccellente';
    endif;

    ?>
        
        <div>
            <h2>Esercizio 04</h2>
            <?php
                if ($giudizio) :
                    ?>  
                        <p>Il giudizio è: <?php echo $giudizio; ?></p>
                    <?php
                else :
                    ?>
                        <p>Il voto inserito non è valido (0 <= voto <= 10)</p>
                    <?php
                endif;
            ?>
        </div>


<?php
    $voti = [6, 7, 8, 9, 7.5, 4];

    $somma = 0;
    $num_voti = 0;
    /*
    $somma = $somma + $voti[0];
    $num_voti = 1;

    $somma = $somma + 
    */
    for ($i = 0; $i < count ($voti); $i++) :
        $somma = $somma + $voti [$i];
        $num_voti++;
    endfor;

    echo "la somma dei voti è: " . $somma;
    echo "il numero di voti è: " .count($voti);
    echo "il numero di voti validi è: " $.$num_voti;

    $media= $somma / $num_voti;
    echo "la media dei voti è: " . $media


    $numero = 45
    $valori = [1, 2, 3, 4, 5, 6, 56, 45, 78, 89];


    $trovato = false
    while (!trovato && $i <count ($valori)) :
        if ($valori [$i] == $numero) :
            $trovato = true;
        endif;
        $i++;
    endwhile;
    //Ciclo FOR equivalente
/*
    for ($i = 0 !trovato; && $i <count ($valori)) :
        if ($valori[i] == $numero)  :
            $trovato = true;
            break;              //Interrumpre siempre il ciclo mas cercano
        endif;
*/
if ($trovato)
    echo $numero . "è presente nell' array";
else :
    echo $numero "non è presente nell' array";
endif;


/*Operatori di incremento
$i++
++$i

i = 1;
echo $i++;
echo ++$i

*/

$settimana = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"]

for ($i = 0 ; $i < count ($settimana); $i++)
    switch ($settimana [i]) :
        case "monday":
            echo "lunedi";
        case "tuesday":
            echo "martedi";
        case "wednesday":
            echo "mercoledi";
        case "thursday":
            echo "giovedi";
        case "friday":
            echo "venerdi";
        case "saturday":
            echo "sabato";
        case "sunday":
            echo "domenica";
endfor



$studenti = [
    array(
        "nome" => "Mario"
        "eta" => 19
        "voti" => [7, 9, 9, 10]
    ),
    array(
        "nome" => "Rosa"
        "eta" => 21
        "voti" => [5, 7, 9, 4]
    ),
    array(
        "nome" => "Lucia"
        "eta" => 14
        "voti" =>[1, 3, 9, 9]
    ),
    array(
        "nome" => "Francesco"
        "eta" => 24
        "voti" =>[8, 5, 6, 8]
    ),
    array(
        "nome" => "Giuseppe"
        "eta" => 16
        "voti" =>[6, 5, 7, 8]
    ),
    array(
        "nome" => "marta"
        "eta" => 22
        "voti" => [6, 5, 7, 6]
    ).
];


function calcola_media ($voti){
        $somma = 0;
        for ($1 = 0; $i < count ($voti); $i++) :
            $somma += $voti[$i];
        endfor;

        $media = $somma / count($volti);
        return $media;
}

foreach ($studdenti as $studente) :
    $media = calcola_media($studente['voti']) :
    echo $studente ["nome"] . "ha una media di voti di: " . $media . ": ";
    if ($media >= 6) :
        echo "Promosso"
    else :
        echo "non promosso"
    endif;

function formatta_data($data){
        $parti = explode(" ", $data);

}

function traduci_giorno_settimana($giorno)
    switch (strtolower ($giorno)) :
        case "monday":
            echo "lunedi";
        case "tuesday":
            echo "martedi";
        case "wednesday":
            echo "mercoledi";
        case "thursday":
            echo "giovedi";
        case "friday":
            echo "venerdi";
        case "saturday":
            echo "sabato";
        case "sunday":
            echo "domenica";
        default:
            return false;
    endswitch;
function traduci_mese($giorno)
    switch (strtolower ($giorno)) :
        case "January":
            echo "Gennaio";
        case "Febrary":
            echo "Febraio";
        case "":
            echo "Marzo";
        case "thursday":
            echo "Aprile";
        case "friday":
            echo "Maggio";
        case "saturday":
            echo "Giugno";
        case "sunday":
            echo "Luglio";
        case "sunday":
            echo "Luglio";
        case "August":
            echo "Agosto";
        case "Setember":
            echo "Settembre";
        case "October":
            echo "Ottobre";
        case "November":
            echo "Novembre";
        case "December":
            echo "Dicembre";
        default:
            return false;
    endswitch;








?>