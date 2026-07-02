<?php

    $arr = [
        'cor' => 'vermelho',
        'forma' => 'retângulo',
        'material' => 'aço'
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    $nome = "Matheus";

    $pessoa =[
        'nome' => 'João',
        'idade' => 29
    ];

    echo "$nome <br>";

    extract($pessoa);

    echo "$nome <br>";
    echo "$idade <br>";

?>