<?php

    class Calculadora {
        
        public function somar($a, $b){
            $soma = $a + $b;

            echo $soma . "<br>";
            
            return $soma;
        }
        
        public function subtrair ($a, $b){
            $subtracao = $a - $b;

            echo $subtracao . "<br>";
            
            return $subtracao;
        }
        
        public function multiplicar ($a, $b){
            $multiplicaco = $a * $b;

            echo $multiplicaco . "<br>";
            
            return $multiplicaco;
        }
        
        public function dividir ($a, $b){
            $divisao = $a / $b;

            echo $divisao . "<br>";
            
            return $divisao;
        }
    }
    
    $operacao = new Calculadora;
    
    $operacao->somar(2, 8);
    
    $operacao->subtrair(5, 2);
    
    $operacao->multiplicar(7, 7);
    
    $operacao->dividir(12, 3);

?>