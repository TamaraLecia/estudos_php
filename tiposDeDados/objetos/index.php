<?php

    class Pessoa {
        function falar(){
            echo "Olá pessoal";
        }
    }

    $leona = new Pessoa();

    $leona->nome = "Leona Larissa";

    echo $leona->nome;
?>