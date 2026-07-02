<?php

$arr = [
    [1, 2, 3, 4],
    [2, 4, 8, 16],
    [3, 9, 27, 81]
];

// array externo
for($i = 0; $i < count($arr); $i++){
    echo "Mudando para o array: " . ($i + 1) . "<br>";
    
    // array interno
    for($j = 0; $j < count($arr[$i]); $j++){
        print_r($arr[$i][$j] . " ");
    }
    echo "<br>";
    echo "<br>";
}

?>