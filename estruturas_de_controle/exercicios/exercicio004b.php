<?php

    $peso1 = 50;
    $peso2 = 80;
    $peso3 = 80.5;
    $pesoMaximo = 80;

    if($peso1 <= $pesoMaximo){
        echo "Está dentro do peso limite, pesando " . $peso1 . "<br>";
    } else{
         echo "Está pesando demais com " . $peso1 . "<br>";
    }

    if($peso2 <= $pesoMaximo){
        echo "Está dentro do peso limite, pesando " . $peso2 . "<br>";
    } else{
         echo "Está pesando demais com " . $peso2 . "<br>";
    }

    if($peso3 <= $pesoMaximo){
        echo "Está dentro do peso limite, pesando " . $peso3 . "<br>";
    } else{
        echo "Está pesando demais com " . $peso3 . "<br>";
    }

?>