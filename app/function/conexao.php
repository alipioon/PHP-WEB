<?php

require_once('../app/function/function.php');

    $serv = "localhost";
    $port = 5432;
    $bcod = "controle2022";
    $user = "postgres";
    $pass = "postgres";

    // $conn = pg_connect("host=$serv port=$port dbname=$bcod user=$user password=$pass");

    $conn = new PDO("pgsql:host=".$serv.";port=".$port.";dbname=".$bcod, $user, $pass);

    if(!$conn){
        echo 'erro na conexao ' . pg_last_error($conn);
        }
 
    $stmt = $conn->prepare("select mm.nome,ms.menu_id,ms.subnome,ms.link from menu_menu mm 
                            join menu_submenu ms on ms.menu_id = mm.id  order by ms.menu_id");
    $stmt->execute();
  
    $aux = array();
    while($menu = $stmt->fetchObject()){
         $var1 = $menu->nome;
         $var2 = $menu->menu_id;
         $var3 = $menu->subnome;
         $var4 = $menu->link;
         $aux2 = array($var1,$var2,$var3,$var4);
         array_push($aux, $aux2);
    };
  
    $_POST = $aux;
    // dd($_POST);
    //  die();


    // for ($k=0; $k < count($_POST) ; $k++){ 
    //     $vl = $_POST[$k][0];
    
    //     echo $k . '...' . $vl . '<br>';
    //  if ($vl = $_POST[$k][0]){
    //     echo $vl;
    //     echo '<br';
    //      for ($i=0; $i < count($_POST) ; $i++){ 
    //         if($vl = $_POST[$i][0]){
    //            echo $i . '...' . $_POST[$i][0];
    //         }    
    //     }
    //     $vl = '';    
    //  } 

    // }        
    
    // die();

    
?>
