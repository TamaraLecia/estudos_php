<?php

    function listaSupermercado($lista){
        $list = implode(", ", $lista);

        return $list;
    }

    echo listaSupermercado(["Leite", "Maçã", "Morango"]);

?>