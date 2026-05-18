<?php

    $arrayNumero = [];

    for($i = 0; $i <= 30; $i++){
        array_push($arrayNumero, $i);
    }

    print_r($arrayNumero);

    function arrayMaiorQueSete($array){

        $arrayRetorno = [];
        
        for($j = 0; $j < count($array); $j++){

            if($array[$j] > 7){
                array_push($arrayRetorno, $array[$j]);
            }
        }

        return $arrayRetorno;
    }

    $novoArray = arrayMaiorQueSete($arrayNumero);

    echo "<br> <br> <br> Array com números maior que sete:<br><br>";
    print_r($novoArray);

?>