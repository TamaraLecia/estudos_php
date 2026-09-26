<?php

    $fileName = 'lista_tarefa_adicionada.txt';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $index = $_POST['index']; //index da tarefa no array
        $tarefaEditada = strip_tags($_POST['tarefa']);

        //mostra todas as tarefas
        $tarefas = file($fileName, FILE_IGNORE_NEW_LINES);

        //Edita a tarefa seleciona
        $tarefas[$index] = '<b>'. $tarefaEditada . '</b>';

        //Salva o arquivo inteiro com a tarefa editada
        file_put_contents($fileName, implode("\n", $tarefas) . "\n");
    }

    //Exibe as tarefas
    $tarefas = file($fileName, FILE_IGNORE_NEW_LINES);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Editar Tarefa</h2>
    <?php foreach ($tarefas as $index => $tarefa): ?>
        <!--Botão para editar-->
        <form action="" method="post">
            <input type="hidden" name="index" value="<?php echo $index; ?>">
            <input type="text" name="tarefa" id="" value="<?php echo strip_tags($tarefa); ?>">
            <button type="submit">Editar</button>
        </form>
    <?php endforeach; ?>
</body>
</html>