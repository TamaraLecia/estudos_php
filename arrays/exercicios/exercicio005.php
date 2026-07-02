<?php

    $veiculo = "Moto";
    $quantPneus = "2";
    $combustivel = 'gasolina';
    $modelo = "Pop 100";

    $moto = compact("veiculo", "quantPneus", "combustivel", "modelo");

    print_r($moto);
    echo "<br>";

    foreach($moto as $caracteristica => $value){
        echo "$caracteristica: $value <br>";
    }
    

?>