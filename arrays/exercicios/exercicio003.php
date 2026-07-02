<?php

    $carro = ["jaguar", 3.0, "azul", 18, "Teto solar", "automático"];

    print_r($carro);
    echo "<br>";

    list($marcaCarro, $motor, $corDoCarro, $aroCarro, $opicional, $cambio) = $carro;

    echo "$marcaCarro <br>";
    echo "$motor <br>";
    echo "$corDoCarro <br>";
    echo "$aroCarro <br>";
    echo "$opicional <br>";
    echo "$cambio <br>";



?>