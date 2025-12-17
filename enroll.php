<?php
include 'config.php';
session_start();
$course_id = $_GET['course_id'];
$usres_id = $_SESSION['usere_id'];

$sql = "insert into  `enrollments`(`usere_id`,`course_id`) values('$usres_id','$course_id')";
            $result= mysqli_query($conect,$sql);

header('location:courses_list.php?');
exit;
?>