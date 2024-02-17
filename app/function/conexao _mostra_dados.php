<?php
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
 
    $stmt = $conn->prepare("SELECT * FROM public.menu_menu ");
    $stmt->execute();

    $_POST = $stmt->fetchObject();

    var_dump($_POST);
    die();
    // $stmt = pg_query($conn, "SELECT * FROM public.menu_menu");
    
?>

<table>
<thead>
<tr>
    <th>id</th>
    <th>nome</th>    
</tr>
</thead>
<tbody>
    <?php while($menu = $stmt->fetchObject()): ?>
        <tr>
            <td><?= $menu->id ?></td>
            <td><?php echo $menu->nome ?></td>
        </tr>
    <?php  endwhile ?>

</tbody>
</table>
<?php exit(); ?>
</table>

