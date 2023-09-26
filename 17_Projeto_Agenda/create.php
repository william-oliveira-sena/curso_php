<?php
    include_once ("templates/header.php");
    
?>
 
 
    <div class="container">
         <?php include_once("templates/backbtn.html"); ?>
         <h1 id="main-title">Criando Contato</h1>  

         <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name"> Nome do Contato</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu Nome" required>                
            </div>
            <div class="form-group">
                <label for="fone"> Telefone do Contato</label>
                <input type="text" class="form-control" id="fone" name="fone" placeholder="Digite o Telefone" required>                
            </div>
            <div class="form-group">
                <label for="observation">Observações</label>
                <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Digite as observações"> </textarea>            
            </div>
            <div>
            <button type="submit" class="btn btn-primary"> Cadastrar</button>
            </div>
         </form>
    </div>
   

<?php

    include_once("templates/footer.php");
?>