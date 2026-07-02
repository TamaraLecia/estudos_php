<?php

    $arr = [
        'Adriana' => 10,
        'Pedro' => 9.5,
        'Cleber' => 9.8,
        'Pilar' => 5,
        'Ademir' => 6
    ];

    arsort($arr);
?>

<h1>Ranking de pontuação dos personagens da Novela Quem Ama Cuida:</h1>
<ol>
    <?php foreach($arr as $personagem => $pontuacao): ?>
        <li><?= $personagem ?> => <?= $pontuacao ?> pontos</li>
    <?php endforeach; ?>
</ol>