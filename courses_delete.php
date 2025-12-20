
<?php include'config.php';?>
<?php 
$id=(int)$_GET["id"];
 $sql = ( "DELETE FROM  `courses` WHERE id='$id' ");
    $result= mysqli_query($conect,$sql);

header('location:courses_list.php?');
?>
