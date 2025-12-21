<?php
require_once 'config.php';

$errure = [];
if(empty(trim($_POST['email']))){
    $errure['email'] = 'email ne doit étre pas vide!';
}
elseif(empty(trim($_POST['password']))){
    $errure['password'] = "password ne doit étre pas vide";
}
else{
$email = $_POST['email'];
$password = $_POST['password'];


 $sql = "select * from  users where email = '$email'";
            $result= mysqli_query($conect,$sql); 
            $row= mysqli_fetch_assoc( $result);
            if($row){
               if (password_verify($password , $row['password'])) {
                   session_start();
                   $_SESSION['email'] = $email ;
                   $_SESSION['usere_id'] = $row['id'] ;
                   $_SESSION['name'] = $row['name'] ;

                    header('location:stats_dashboard.php?');
                    exit;
                } else {
                    header('location:login.php? errure=0 ');
                     exit;
                }

            }else{
             header('location:login.php? errure=1');
             exit;
}           }
?>
<span style="color:red">
  <?php foreach($errure as $ero){
  echo $ero ?? ''  ;}
  ?>
</span>