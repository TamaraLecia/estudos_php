<?php

    function ordenarNumeros($numeros){
        sort($numeros);

        return $numeros;
    }

    $arrayNumero = [1, 4, 45, 0, 3, 16, 81, -2];

    print_r(ordenarNumeros($arrayNumero));
?>