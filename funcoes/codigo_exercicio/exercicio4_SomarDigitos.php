<?php

    function sumDigits($numeroInteiro){
        $soma = 0;

        while($numeroInteiro > 0){

            $digitos = $numeroInteiro % 10;
            $soma = $soma + $digitos;
            $numeroInteiro = (int)($numeroInteiro / 10);
        }

        return $soma;
    }

    echo sumDigits(456);

?>

