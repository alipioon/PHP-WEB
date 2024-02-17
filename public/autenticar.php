<?php
session_start();
require_once('../app/function/function.php');

// dd('alipio autenticar usuario');


try{
    $user_ok = 'alipio';
    $pass_ok =  '123';

    $user_dig = $_POST["user"];
    $pass_dig = $_POST["passwd"];

    if($user_ok == $user_dig and $pass_ok == $pass_dig){
        $_SESSION["usuario_logado"] = $user_dig ;
        header("Location: index.php");
    }else{
        // throw new Exception("Usuario ou Senha INVALIDO .......");
        header("Location: login.php?falhou=true");
    }
    
}
 catch(Exception $e){
    echo $e->getMessage();
    // echo $error;
  
}

