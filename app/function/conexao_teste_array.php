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
 
    $stmt = $conn->prepare("select mm.nome,ms.menu_id,ms.subnome from menu_menu mm 
                            join menu_submenu ms on ms.menu_id = mm.id order by ms.menu_id");
    $stmt->execute();
  
    $aux = array();
    while($menu = $stmt->fetchObject()){
         $var1 = $menu->nome;
         $var2 = $menu->menu_id;
         $var3 = $menu->subnome;
         $aux2 = array($var1,$var2,$var3);
         array_push($aux, $aux2);
    };
  
    $_POST = $aux;
  
    //  dd($_POST);
    // var_dump($_POST);
    // echo($_POST[1][0]);
    // echo($_POST[2][0]);
    // die();
    
?>

    <table>
    <thead>
    <tr>
        <th>id</th>
        <th>nome</th>    
    </tr>
    </thead>
    <tbody>
        <?php $vl = ''; foreach($_POST as $chave){ ?>
            <tr>
                <?php if ($vl <> $chave[0]): ?>    
                    <td> <?php echo $chave[0]; ?> <br> <?php echo $chave[2]; $vl = $chave[0]; ?> </td> 
                <?php else : ?>
                    <td> <?php echo $chave[2];?> </td> 
                <?php endif ?>
       <?php } ?>
           
            </tr>
      
    </tbody>
    </table>
    <?php exit(); ?>
    </table>
    
    