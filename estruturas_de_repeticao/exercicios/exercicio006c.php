<?php

    $array = [];

    for($i = 10; $i < 21; $i++){
        array_push($array, $i);
    }

    print_r($array);
    echo "<br>";

    // o count serve para contar quantos elementos tem no array
    echo "Números ímpares: <br>";
    for($i = 0; $i < count($array); $i++){
        if($array[$i] % 2 != 0){
            echo"$array[$i] <br>";
        }
    }

?>