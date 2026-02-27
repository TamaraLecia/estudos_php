<?php

    $expressao = "5" * 12;

    echo $expressao;
    echo "<br>";

    echo "Utilizando a função gettype <br>";
    echo gettype($expressao);
    echo "<br>";
    echo gettype([]);
    echo "<br>";
    echo gettype(12.2);
    echo "<br>";
    echo gettype("teste");

?>