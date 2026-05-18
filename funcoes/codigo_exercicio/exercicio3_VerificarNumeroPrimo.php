<?php

    function isPrime($numeroInteiro){
        
        if($numeroInteiro < 2){
            return false;
        } else{
            for($i = 2; $i <= sqrt($numeroInteiro); $i++){
                if($numeroInteiro % $i == 0){
                    return false;
                }
            }

            return true;
        }
    }

    echo isPrime(7);
    echo "<br>";
    echo isPrime(5);


?>