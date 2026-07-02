<?php

    function somaElementos($arr){
        $soma = array_sum($arr);

        print_r($soma);

        return $soma;
    }

    somaElementos([1, 2, 3]);

?>