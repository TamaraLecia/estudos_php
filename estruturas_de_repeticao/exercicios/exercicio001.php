<?php

    $arrayDados = ["Notebook", 100, "Celular", 250.00, "SmartTv", 35, "Smartphone", 5000, "Ipad", 70];
    // O count conta a quantidade de itens do array
    $x = count($arrayDados);
    $y = 0;

    while($y < $x){
        if(is_string($arrayDados[$y])){
            echo $arrayDados[$y] . "<br>";
        }

        $y++;
    }

?>