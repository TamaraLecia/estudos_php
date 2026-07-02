<?php

    function maiorElemento($arr){
        $maiorNumero = 0;

        for($i = 0; $i < count($arr); $i++){
            if($maiorNumero < $arr[$i]){
                $maiorNumero = $arr[$i];
            }
        }

        print_r($maiorNumero);

        return $maiorNumero;
    }

    $numeros = range(1, 20);

    maiorElemento($numeros);

?>