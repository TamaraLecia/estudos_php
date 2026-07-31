<?php


    class Contact {
        public $name = "João";
        public $email = "joao@example.com";
        public $phone = "123456789";
        
        public function getName(){
            return $this->name;
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        public function getPhone(){
            return $this->phone;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }
        
        public function setPhone($phone){
            $this->phone = $phone;
        }
    }
    
    $contato1 = new Contact;
    
    $contato1->getName();
    $contato1->getEmail();
    $contato1->getPhone();
    $contato1->setEmail("maria2@gmail.com");
    $contato1->setPhone("19125-8002");

?>