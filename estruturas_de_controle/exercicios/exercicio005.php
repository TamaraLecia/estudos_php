<?php

    $numero1 = 5;
    $numero2 = 55;

    $numero3 = "cinco";
    $numero4 = "cem";

    if(is_numeric($numero1)){
        $valorMultiplicacao = $numero1 * 2;

        if($valorMultiplicacao > 100){
            echo "O valor obtido na multiplicação é maior que 100 <br>";
        } else{
            echo "O valor não é maior que 100 <br>";
        }
    } else{
        echo "Não é um valor numérico <br>";
    }

    if(is_numeric($numero4)){
        $valorMultiplicacao4 = $numero4 * 2;

        if($valorMultiplicacao4 > 100){
            echo "O valor obtido na multiplicação é maior que 100 <br>";
        } else{
            echo "O valor obtido não é maior que 100 <br>";
        }
    } else{
        echo "Não é um valor númerico <br>";
    }

    if(is_numeric($numero2)){
        $valorMultiplicacao2 = $numero2 * 2;

        if($valorMultiplicacao2 > 100){
            echo "O valor obtido na multiplicação é maior que 100 <br>";
        } else{
            echo "O valor não é maior que 100 <br>";
        }
    } else{
        echo "Não é um valor númerico <br>";
    }


    if(is_numeric($numero3)){
        $valorMultiplicacao3 = $numero3 * 2;
        
        if($valorMultiplicacao3 > 100){
            echo "O valor obtido é maior que 100 <br>";
        } else{
            echo "O valor obtido não é maior que 100 <br>";
        }
    } else{
        echo "Não é um valor númerico <br>";
    }


?>