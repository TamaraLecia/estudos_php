<?php

    function verificarNumero($numero){
        if($numero % 2 == 0){
            echo "O número $numero é par <br>";
        } else{
            echo "O número $numero é ímpar <br>";
        }
    }

    verificarNumero(15);
    verificarNumero(112);
    verificarNumero(10.5);
    verificarNumero(11.7)

?>