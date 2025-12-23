<?php
include 'config.php';
session_start();
if(isset($_SESSION['nobrevivite'])){
$_SESSION['nobrevivite']+=1;
}else{
    
    $_SESSION['nobrevivite']=1;
}

echo $_SESSION['nobrevivite'];

$sql = "select courses.title
        from courses
        lefft join enrollments on courses.id=enrollments.course_id
        where enrollments.course_id is null
";
$result = mysqli_query($conect,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo $row['title'];
}

?>
