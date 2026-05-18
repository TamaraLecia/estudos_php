<?php

    function countVowels($palavra){
        $contador = 0;
        $vogais = "aeiouAEIOU";

        for($i = 0; $i < strlen($palavra); $i++){
            $letras = $palavra[$i];
            if(strpos($vogais, $letras) !== false){
                $contador++;
            }
        }

        return $contador;
    }
    echo countVowels("Bolo") . "<br>";
    echo countVowels("Pipoca doce de chocolate") . "<br>";

?>