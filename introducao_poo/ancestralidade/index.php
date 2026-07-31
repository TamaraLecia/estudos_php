<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $marcos = new Humano;

    $turca = new Animal;


    if($marcos instanceof Humano) {
        echo "Marcos é um Humano <br>";
    } else {
        echo "Marcos não é um humano <br>";
    }

    if($turca instanceof Humano) {
        echo "Turca é um Humano <br>";
    } else {
        echo "A Turca não é um humano <br>";
    }

    $pedro = new Professor;

    // if($pedro instanceof Professsor){
    //     echo "Pedro é um Humano <br>";
    // } else {
    //     echo "Pedro não é um humano <br>";
    // }

    if($pedro instanceof Humano){
        echo "Pedro é um Humano <br>";
    } else {
        echo "Pedro não é um humano <br>";
    }

    if($pedro instanceof Professor){
        echo "Pedro é um professor <br>";
    } else {
        echo "Pedro não é um humano <br>";
    }

    if($turca instanceof Professor){
        echo "TUrca é um Professor <br>";
    } else {
        echo "Turca não é um Professor <br>";
    }


?>