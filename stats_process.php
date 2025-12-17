<?php 
require_once 'config.php';

$sql = "select count(*) as totacours from  courses ";
            $result= mysqli_query($conect,$sql);
            $row= mysqli_fetch_assoc( $result);

?>