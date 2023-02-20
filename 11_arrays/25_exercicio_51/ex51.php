<?php

    $competicao = [
        'william' => 9,
        'thiago' => 7,
        'bruno' => 5
    ];

    arsort($competicao);

   
?>
<h1> Ranking:</h1>

<ol>
    <?php foreach ($competicao as $pessoa => $pontuacao): ?>
        <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos </li>
        <?php endforeach ?>

</ol>

