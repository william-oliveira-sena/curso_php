<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    //modificaçõa de dados
    if(!empty($data)){

       

        //criando contato

        if($data["type"] === "create"){
            $name = $data["name"];
            $phone = $data["fone"];
            $observation = $data["observation"];

            $query = "INSERT INTO contacts (name,phone, observations) VALUES (:name,:phone,:observation)";
    $smtp = $conn->prepare($query);
    $smtp->bindParam(":name", $name);
    $smtp->bindParam(":phone", $phone);
    $smtp->bindParam(":observation", $observation);

    try{

        $smtp->execute();
        $_SESSION["msg"] = "Contato criado com sucesso!";



    }catch(PDOException $e){
        //erro na conexão
        $error = $e->getMessage();
        echo "erro: $error";
    }
        }else if($data["type"] === "edit"){

            $name= $data["name"];
            $phone = $data["fone"];
            $observations = $data["observation"];
            $id = $data["id"];
 
            $query= "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

            $smtp = $conn-> prepare ($query);

            $smtp->bindParam(":name", $name);
            $smtp->bindParam(":phone", $phone);
            $smtp->bindParam(":observations", $observations);
            $smtp->bindParam(":id", $id);

        try{

            $smtp->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";
    
    
    
        }catch(PDOException $e){
            //erro na conexão
            $error = $e->getMessage();
            echo "erro: $error";
        }
             
        }else if($data["type"] === "deletar"){
            $id = $data["id"];


            $query = "DELETE FROM contacts WHERE id = :id";
            $smtp = $conn->prepare($query);
            $smtp->bindParam(":id", $id);
          

            try{

                $smtp->execute();
                $_SESSION["msg"] = "Contato removido com sucesso!";
        
        
        
            }catch(PDOException $e){
                //erro na conexão
                $error = $e->getMessage();
                echo "erro: $error";
            }
        }

    //redirect header

    header("Location:" . $BASE_URL . "../index.php");
    //seleção de dados
    }else{
        $id;

        if(!empty($_GET)){
            $id = $_GET ["id"];
         
        }
            //retorna o dado de um contato
            if(!empty($id)){
                
                $query = "SELECT * FROM contacts WHERE id = :id";
    
                $stmt = $conn->prepare($query);
    
                $stmt->bindParam(":id", $id);
    
                $stmt->execute();
    
                $contact = $stmt->fetch();
    
        }else{
    
         //retorna todos os contatos
            $contacts = [];
    
            $query = "SELECT * FROM contacts";
    
            $stmt = $conn->prepare($query);
    
            $stmt->execute();
    
            $contacts = $stmt->fetchAll();
        }

    }

    //fechar conexão
    $conn = null;

   