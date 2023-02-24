<?php

    $marca = $_POST['marca'];
    $preco = $_POST['preco'];
    
    if(isset($_POST['opcionais'])){
        $opcionais = $_POST['opcionais'];

    }
    


?>


Marca <?= $marca ?> <br>
Preço <?= $preco ?> <br>
Opcionais <?php print_r($opcionais); ?> <br>
