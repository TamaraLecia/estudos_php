<?php

    class Carro{
        public $modelo;
        public $cor;
        Public $velocidade_maxima;

        function setVelocidadeMaxima($velocidade){
            $this->velocidade_maxima = $velocidade;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade máxima do carro é $this->velocidade_maxima km/h <br>";
        }
    }

    $carro1 = new Carro;

    $carro1->modelo = "Fiat";
    $carro1->cor = "Cinza queimado";

    echo "Modelo do carro é $carro1->modelo <br>";
    echo "A cor do carro é $carro1->cor <br>";
    
    $carro1->setVelocidadeMaxima(100);

    $carro1->getVelocidadeMaxima();

    $carro2 = new Carro;

    $carro2->modelo = "Hailux";
    $carro2->cor = "Prata";

    echo "<br> O modelo do carro é $carro2->modelo <br>";
    echo "A cor do carro é $carro2->cor <br>";

    $carro2->setVelocidadeMaxima(180);
    $carro2->getVelocidadeMaxima();



?>