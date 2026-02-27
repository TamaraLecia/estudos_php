<?php

    function expressao($a, $b, $c){
        $delta = ($b * $b) - 4 * $a * $c;
        echo "delta = $delta";

        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        echo "<br>";
        echo "x1 = $x1";

        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "<br>";
        echo "x2 = $x2";
    }

    expressao(1, 5, 6);

?>