<?php

    $dadosPessoas = [
        "Brunessa" => 25,
        "Salma" => 28,
        "Alika" => 29,
        "Tonho" => 30,
        "Pedro" => 32
    ];

?>

<table border= "1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($dadosPessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    
    <?php endforeach; ?>
</table>