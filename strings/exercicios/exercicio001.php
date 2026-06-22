<?php

   $arrayAssociativo =[
        'carro' => 50.0000,
        'sofá' => 3000,
        'cafeteira' => 500,
        'pastel' => 3.50,
        'bolo' => 2.50
   ];

   function itensComprar($arrayAssociativo){

    $itensComprados = [];

    foreach($arrayAssociativo as $itens => $preco){

        if($preco > 10){
            array_push($itensComprados, $itens);
        }
    }

    return $itensComprados;

   }

   $arrayItensCaros = itensComprar($arrayAssociativo);
   print_r($arrayItensCaros);

?>