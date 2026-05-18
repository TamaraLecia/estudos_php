<?php

    function velocidadeMaxima($vel){
        if(is_int($vel)){
            echo "O carro atinge a velocidade máxima de $vel km/h <br>";
        } else {
            echo "Por favor, passe um número inteiro <br>";
        }
    }

    velocidadeMaxima(200);
    velocidadeMaxima(300);
    velocidadeMaxima(400);
    // Não pode executar funções que existem parâmetro sem um parâmetro
    //velocidadeMaxima();

    echo "Teste continuando <br>";

    $velocidade = 125;

    velocidadeMaxima($velocidade);

    // PHP ignora parâmetro desnecessário
    velocidadeMaxima(250, "teste");

    velocidadeMaxima("teste");

    // Mais parâmetros
    function descreverAnimal($nome, $raca){
        echo "O $nome é da raça $raca <br>";
    }

    descreverAnimal("Bob", "vira lata");
    descreverAnimal("Shark", "Pastor Alemão");
    descreverAnimal("Poodle", "Tita");

    // Poucos parâmetrosz sempre tem que pasar todos os parâmetros da função
    // descreverAnimal("Tita");
?>