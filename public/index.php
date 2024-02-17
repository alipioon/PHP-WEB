<?php
session_start();

require_once '../app/function/conexao.php';
// require_once '../app/function/conexao_teste_array.php';
require_once '../vendor/autoload.php';
require_once('../app/function/function.php');
require_once ('../app/config/global.php');

// dd('alipio123456789');

//  dd(phpinfo());

// echo 'alipio de oliveira neto 12456';
// echo '<br>';

if(!isset($_SESSION["usuario_logado"])){
    header("Location:login.php");

}else{
//    require_once '../app/views/Menu/menu.html';
   require_once '../app/views/Menu/menu.html';
}


