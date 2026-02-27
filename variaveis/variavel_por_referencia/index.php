<?php

    $x = 10;
    
    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;

    $y = 15;

    echo "<br>";
    echo "Atribuição por referência1";

    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;

    $x = 20;

    echo "<br>";
    echo "Atribuição por referẽncia 2";

    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;

    $nome = "Matheus";

    $nome2 =& $nome;

    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $nome2;

    $nome2 = "João";

    echo "<br>";
    echo "Atribuição por referência 3";

    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $nome2;


?>