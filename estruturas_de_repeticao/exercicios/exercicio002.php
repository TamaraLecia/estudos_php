<?php

    $contador = 4;

    while($contador <= 30){

        echo "$contador <br>";


        if($contador === 24){
            echo "O loop chegou no numero 24";
            break;
        }

        $contador +=2;
    }

?>