<?php

    $arrayNumeros = [1, 2, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    echo "Números pares <br>";
    for($i=1; $i <= 20; $i++){
        if($arrayNumeros[$i] % 2 == 0){
            echo "$arrayNumeros[$i] <br>";
        }
    }

?>