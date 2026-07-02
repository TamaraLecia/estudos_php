<?php

    function encontrarNumerosPares($arr){
        $array = [];

        for($i = 0; $i < count($arr); $i++){
            if($arr[$i] % 2 == 0){
                $numeroPar = $arr[$i];

                array_push($array, $numeroPar);
            }
        }
        print_r($array);

        return $array[$i];
    }

    $numeros = range(1, 20);

    encontrarNumerosPares($numeros);


?>