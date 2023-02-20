<?php

    $funcionarios = [
        
        'william' => 34,        
        'thiago' => 34,
        'augusto' => 28
    ];



?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>idade</th>
    </tr>
    <?php foreach ($funcionarios as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>