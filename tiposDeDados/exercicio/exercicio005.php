<?php

    $pessoa=[
        'nome' => 'Camy',
        'idade' => '26',
        'edereco' => 'São Cristovão',
        'numeroTelefone' => '9999000',
        'profissao' => 'costureira',
    ];

    $nome = $pessoa['nome'];
    $idade = $pessoa['idade'];

    if($idade < 30){
        echo "O seu nome é $nome e a sua idade é $idade anos";
    } else{
        echo "Não foi possivel identificar o funcionário(a)";
    }

?>