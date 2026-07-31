<?php

    class Cachorro{

        function latir(){
            echo "Au Au Au Au <br>";
        }

        function andar($metros){
            echo "O cachorro andou $metros metros <br>";
        }

    }

    $cachorro1 = new Cachorro;
    $cachorro2 = new Cachorro; 

    $cachorro1->latir();
    
    $cachorro2->andar(2);

?>