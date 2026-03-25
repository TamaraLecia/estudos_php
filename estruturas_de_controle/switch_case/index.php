<?php

    $x = 1;

    switch($x){
        case 0:
            echo "x é igual a 0 <br>";
            break;
        case 1:
            echo "x é igual a 1 <br>";
            break;
        default:
            echo "x não é igual a nenhum dos valores mencionados <br>";
    }

    $y = "Matheus";

    switch($y){
        case "Matheus":
            echo "O nome é Matheus";
            break;
        case "João":
            echo "O nome é João";
            break;
        default:
            echo "O nome não foi encontrado";
    }



?>