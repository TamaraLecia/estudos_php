<?php

    class Cachorro {
        public $nome;
        public $cor;
        public $idade;
        public $raca;

        function __construct($nome, $cor, $idade, $raca){
            $this->nome = $nome;
            $this->cor = $cor;
            $this->idade = $idade;
            $this->raca = $raca;
        }

        public function verDadosCachorro(){
            echo "O nome do cachorro é $this->nome a cor dele é $this->cor a sua idade é $this->idade e a sua raça é $this->raca <br>"; 
        }
    }

    $cachorro1 = new Cachorro("KiSaReNa", "multicor", "13 anos", "cachoro sem raça definida");

    $cachorro1->verDadosCachorro();

?>