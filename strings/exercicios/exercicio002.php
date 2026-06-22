<?php

    $str = "O rato roeu a roupa do rei  de Roma";
    $conte = 0;

    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] == "a"){
            $conte = $conte + 1;
        }
    }

    echo "A frase possui $conte letras a";


?>