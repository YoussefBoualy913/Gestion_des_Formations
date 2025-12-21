<?php 
require_once 'config.php';

$errure = [];
if(empty(trim($_POST['name']))){
    $errure['name'] = 'le nom ne doit pas vide';
}
elseif(empty(trim($_POST['email']))){
    $errure['email'] = "l'email ne doit pas vide";
}
elseif(empty(trim($_POST['password']))){
    $errure['password'] = "le password ne doit pas vide";
}
elseif($_POST['password'] !=$_POST['password_confirm'] ){
    $errure['password'] = "le password  doit etre le meme que password_confirm";
}else{
    $name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash = password_hash("$password", PASSWORD_DEFAULT);

 $sql ="insert into  `users`(`name`,`email`,`password`) values(?,?,?)";
             $stmt = mysqli_prepare($conect, $sql);
             mysqli_stmt_bind_param( $stmt,"sss",$name,$email,$hash);
             mysqli_stmt_execute($stmt);
             header('location:login.php?');
             exit;
}
?>
<span style="color:red">
  <?php foreach($errure as $ero){
  echo $ero ?? ''  ;}
  ?>
</span>