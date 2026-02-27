<?php

$numero1 = 5;
$numero2 = 7;
$numero3 = 12;
$numero4 = 22;

$soma = $numero1 + $numero2;

$divisao = $numero4 / 2;

if($divisao == $numero3){
    echo "O resultado da divisão do " . $numero4 . "pelo número 2 é: " . $numero3;
}

if($soma == $numero3){
    echo "A soma entre os números " . $numero1 . " e " . $numero2 .  " é: " . $soma;
}

echo "<br>";

if($divisao == 11){
    echo "O resultado da divisão é: " . $divisao;
}

?>