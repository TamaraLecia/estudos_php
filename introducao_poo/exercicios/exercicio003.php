<?php

    class Pessoa {
        public $nome;
        public $idade;

        function andar($metro){
            echo "Você andou $metro metro(s)<br>";
        }
    }

    $pessoa1 = new Pessoa;

    $pessoa1->nome = "Adriana";
    $pessoa1->idade = 29;

    echo "O nome da pessoa é $pessoa1->nome e tem $pessoa1->idade anos <br>";

    $pessoa1->andar(4);

?>