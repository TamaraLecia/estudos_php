<?php

    $nome = "Gerluce";
    $idade = 30;
    $status = True;

    if(is_string($nome)){
        echo " O nome " . $nome .  " é uma string <br>";
    } else{
        echo "nome não é uma string <br>";
    }

    if(is_int($idade)){
        echo "A idade " . $idade . " é um valor inteiro <br>";
    } else {
        echo "A idade não é um valor inteiro <br>";
    }

    if(is_bool($status)){
        echo "O status é " . $status . " é um valor booleano <br>";
    } else{
        echo "O status não é um valor booleano <br>";
    }

    if(is_string($idade) && is_bool($idade) && is_int($status)){
        echo "Os valores estão com os tipos corretos <br>";
    } else{
        echo "Os valores estão com os tipos incorretos <br>";
    }

?>