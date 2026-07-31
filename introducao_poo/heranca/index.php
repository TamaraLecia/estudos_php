<?php

    class Humano {

		public $idade = 29;

		public function falar(){
            echo "Olá Mundo! <br>";
        }

        private function gritar(){
            echo "PHP É MUITO BOM! <br>";
        }

        public function acessarGritar(){
            $this->gritar();
        }

        protected function falarBaixinho(){
            echo "lalala <br>";
        }

        public function acessarFalarBaixinho(){
            $this->falarBaixinho();
        }

    }

    class Programador extends Humano {

        public function acessarFalarBaixinhoProgramador(){
            $this->falarBaixinho();
        }

    }

    $ze = new Humano;

    $ze->falar();
    $ze->acessarGritar();
    $ze->acessarFalarBaixinho();

    $matheus = new Programador;

    echo $matheus->idade . "<br>";

    $matheus->falar();
    $matheus->acessarGritar();
    $matheus->acessarFalarBaixinhoProgramador();


?>