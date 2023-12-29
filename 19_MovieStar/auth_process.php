<?php
 
 require_once("globals.php");
 require_once("db.php");
 require_once("models/User.php");
 require_once("models/Message.php");
 require_once("dao/UserDAO.php");

 $message = new Message($BASE_URL);

 $userDao = new UserDAO($conn, $BASE_URL);

 // resgata o tipo de form

 $type = filter_input(INPUT_POST, "type");

 //verificação do tipo de form
    if($type === "register"){
       
        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

        //verificação de dados minimos

        if($name && $lastname && $email && $password){

            //verificar se as senhas batem
            if($password === $confirmpassword){

                //verificar se o emails já está cadastrado no sistema
                if($userDao->findByEmail($email) === false){

                    $user = new User();

                    //criação de token e senha
                    $userToken= $user->generateToken();
                    $finalPassword = password_hash($password, PASSWORD_DEFAULT);

                    $user->name = $name;
                    $user->lastname = $lastname;
                    $user->email = $email;
                    $user->password = $finalPassword;
                    $user->token = $userToken;
                    
                    $auth = true;

                    $userDao ->create($user, $auth);



                }else{
                      // enviar msg erro, usuário já existe
            $message->setMessage("Usuário já cadastrado!", "error", "back"); 
                }
                
              
            }else{
                  // enviar msg erro, senha incorreta
            $message->setMessage("As senhas não iguais!", "error", "back"); 
            }

        }else{

            // enviar msg erro, de dados faltantes
            $message->setMessage("Por favor, preencha todos os campos!", "error", "back");
        }


    }else if($type === "login"){


    }


?>