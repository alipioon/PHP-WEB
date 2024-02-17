<?php
session_start();


// echo $_SESSION["usuario_logado"]; 
// exit;

session_destroy();
// header("Location:../../../../PHP-WEB");
header("Location:../PHP-WEB");


// header("location: ../../../");
// exit();


// session_reset();
// header("location:index.php");
// header("location:login.php");
// unset($_SESSION["usuario_logado"]); 
// header("location:login.php");

// die("sair");


// session_start();
// $token = md5(session_id());
// if(isset($_GET['token']) && $_GET['token'] === $token) {
//    // limpe tudo que for necessário na saída.
//    // Eu geralmente não destruo a seção, mas invalido os dados da mesma
//    // para evitar algum "necromancer" recuperar dados. Mas simplifiquemos:
//    session_destroy();
//    header("location: http://exemplo.com.br/index.php");
//    exit();
// } else {
//    echo '<a href="doLogout.php?token='.$token.'>Confirmar logout</a>';
// }

