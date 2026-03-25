<?php

    function calcularDesconto($valorProduto, $categoriaProduto){
        if($categoriaProduto == "eletronicos" || $categoriaProduto == "eletrônicos"){
            $desconto = $valorProduto * (10/100);
            $precoFinal = $valorProduto - $desconto;
            return "O valor do produto que custa " . $valorProduto . "R$ com um desconto de 10% é " . $precoFinal . "R$";
        } else if($categoriaProduto == "vestuario"){
            $desconto = $valorProduto * (20/100);
            $precoFinal = $valorProduto - $desconto;
            return "O valor do produto que custa " . $valorProduto . "R$ com um desconto de 20% é " . $precoFinal . "R$";
        } else if($categoriaProduto == "alimentos"){
            $desconto = $valorProduto * (5/100);
            $precoFinal = $valorProduto - $desconto;
            return "O valor do produto que custa " . $valorProduto . "R$ com um desconto de 5% é " . $precoFinal . "R$";
        } else{
            return "nenhum desconto aplicado, o valor do produto permanace ". $valorProduto . "R$";
        }
    }

    echo calcularDesconto(120, "frios");

?>