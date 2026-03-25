<?php

    function verificarAcesso($idade, $statusAutorizacao){
        if($idade >= 18 && $statusAutorizacao == true){
            return "Acesso autorizado";
        } else if($idade >= 18  && $statusAutorizacao == false){
            return "Acesso negado. Autorização necessária";
        } else{
            return "Acesso negado. Idade mínima requerida: 18 anos";
        }
    }

    echo verificarAcesso(18, false);

?>