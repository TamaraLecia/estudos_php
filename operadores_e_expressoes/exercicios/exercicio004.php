<?php

$a =  45 % 5;
echo "O resto da divisão de 45 dividido por 5 é " . $a . "<br>";

$b = 50 % 3;
echo "O resto da divisão de 50 dividido por 3 é " . $b . "<br>";

$c = 16 / 2;
$c = $c % 2;

if($c  == 0){
    echo " O número é par e o resto da divisão é: " . $c . "<br>";
} else if($c != 0){
    echo " O número é ímpar e o resto da divisão é: " . $c . "<br>";
} else{
    echo "resultado não identificado";
}

?>