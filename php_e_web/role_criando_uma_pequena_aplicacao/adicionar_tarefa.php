<?php

    $fileName = 'lista_tarefa_adicionada.txt';
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $tarefa = strip_tags($_POST['tarefa']);
        file_put_contents($fileName, '<b>' .$tarefa . '</b>' . "\n", FILE_APPEND);
    }

    $tarefas = file($fileName);

    print_r($tarefas);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">voltar a página inicial</a>
    <h2>Tarefas adicionadas <?php echo count(($tarefas)) ?></h2>
    <?php if(empty($tarefas)): ?>
        <p>Nenhuma tarefa adicionada</p>
    <?php else: ?>
        <ul>
            <?php foreach ($tarefas as $tarefa): ?>
                <li><?php echo $tarefa ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif ?>
</body>

</html>