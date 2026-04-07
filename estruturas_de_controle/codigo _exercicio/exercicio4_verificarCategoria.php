<?php

    function verificarCategoria($categoria){
        if($categoria === "eletrônicos" || $categoria === "eletronicos"){
            return "Essa categoria é de produtos eletrônicos";
        } else if($categoria === "vestuário" || $categoria === "vestuario"){
            return "Essa categoria é de produtos de vestuário";
        } else if($categoria === "alimentos"){
            return "Essa categoria é de produtos alimenticios";
        } else {
            return "Categoria desconhecida";
        }
    }

    echo verificarCategoria("imobiliario");

?>