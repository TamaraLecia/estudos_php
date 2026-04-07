<?php

    $nomes = ["Gerluce", "Viviane", "Júnior", "Misael", "Joaquim"];

    $a = 10;

    foreach($nomes as $nome){
        echo "O nome do indice atual é $nome <br>";
        if($nome == "Gerluce"){
            echo "Opa tou atrasada $a minutos <br>";
        }
    }

?>