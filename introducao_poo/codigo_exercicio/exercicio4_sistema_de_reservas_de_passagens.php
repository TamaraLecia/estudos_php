<?php

    class Passenger {
        
        public $name = "Maria";
        public $age = 30;
        public $seatNumber = "A12";
        
        public function getName(){
            return $this->name;
        }
        
        public function getAge(){
            return $this->age;
        }
        
        public function getSeatNumber(){
            return $this->seatNumber;
        }
        
        public function setSeatNumber($seatNumber){
           $this->seatNumber = $seatNumber;
        }
        
    }
    
    $passageiro1 = new Passenger;
    
   echo $passageiro1->getName() . "<br>";
   echo $passageiro1->getAge() . " anos <br>";
   echo $passageiro1->getSeatNumber() . "<br>";
   echo $passageiro1->setSeatNumber("B5");
   echo $passageiro1->getSeatNumber();

?>