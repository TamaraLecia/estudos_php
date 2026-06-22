<?php

    $palavras = "Carro - navio - helicóptero - barco - jangada";

    $arrayPalavras = explode(" - ", $palavras);

    $arrayPalavras2 = explode(",", $palavras);

    print_r($arrayPalavras);
    echo "<br>";
    echo "<br>";
    print_r($arrayPalavras2);

    echo "<br>";
    echo "<br>";

    for($i = 0; $i < count($arrayPalavras); $i++){
        echo "Item: $arrayPalavras[$i] <br>";
    }




?>