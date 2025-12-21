<?php include'config.php';?>
<?php 
$id = (int)$_GET["id"];
$sql = ( "DELETE FROM  `sections` WHERE id='$id' ");
$result= mysqli_query($conect,$sql);
if(!isset($_GET["course_id"])){
    header('location:sections_list.php?');
}
if(isset($_GET["course_id"])){
$cours_id = $_GET["course_id"];
header('location:sections_by_course.php? course_id='.$cours_id);

}
?>