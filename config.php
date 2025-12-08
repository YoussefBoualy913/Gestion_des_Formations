
<?php
$dbname='formation';
$host='localhost';
$username='root';
$password='';

$conect=mysqli_connect($host, $username, $password, $dbname);
if(!$conect){
    die("errur de conecexion ".mysqli_connect_errno());
}
?>