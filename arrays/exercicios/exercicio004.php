<?php

    $arr = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

    print_r($arr);
    echo "<br>";
    echo "<br>";

    $removidos = array_splice($arr, 2, 2); // a partir de qual índice eu quero remover e quantos elementos contando a partir daquele índice eu quero remover

    print_r($removidos);
    echo "<br>";

    echo "Novo array após a remoção <br>";
    print_r($arr);
    echo "<br>";

?>