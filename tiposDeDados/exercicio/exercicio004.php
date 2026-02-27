<?php

    $carro=[
        'marca' => 'FIAT',
        'rodas' => '4',
        'teto_solar' => true,
        'velocidade_maxima' => 300,
        'blindado' => false

    ];

    print_r($carro);

    $marca = $carro['marca'];
    $velocidade_maxima = $carro['velocidade_maxima'];

    echo "<br>";

    echo "A marca do carro é $marca e a sua velocidade máxima é $velocidade_maxima km/h";


?>