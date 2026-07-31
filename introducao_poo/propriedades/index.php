<?php

    class Car {
        public $motor;
        public $rodas = 4;
        public $aro = 20;
        public $cor = "Vermelha";

        function ligar(){
            echo "Vrummmm <br>";
        }
    }

    $ferrari = new Car;

    $ferrari->motor = 1.4;

    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas . "<br>";
    echo $ferrari->motor . "<br>";
    

    $ferrari->cor = "Azul";

    echo $ferrari->cor . "<br>";

    $ferrari->ligar();

?>