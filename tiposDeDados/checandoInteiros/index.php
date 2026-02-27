<?php

    if(is_int(5)){//true
        echo "é um inteiro <br>";
    }

    if(is_int("Não é um inteiro")){//false
        echo "é um inteiro 2 <br>";
    }

    $a = 10;

    if(is_int($a)){
        echo "é um inteiro 3 <br>";
    }