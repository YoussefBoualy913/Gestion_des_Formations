<?php
include 'config.php';
session_start();
$course_id = (int)$_GET['course_id'];
$usres_id = (int)$_SESSION['usere_id'];

$sql = "insert into  `enrollments`(`usere_id`,`course_id`) values(?,?)";
          
          $stmt = mysqli_prepare($conect, $sql);
            mysqli_stmt_bind_param( $stmt,"ii",$usres_id,$course_id);
            mysqli_stmt_execute($stmt);

header('location:courses_list.php?');
exit;
?>