<?php
$server="localhost";
$name="root";
$pass="";
$db="management";
$conn=mysqli_connect($server,$name,$pass,$db);
if(!$conn){
    die('fail').mysqli_connect_error();
}
else{
    echo"pass";
}
?>