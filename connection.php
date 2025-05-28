<?php
$host="localhost";
$users="root";
$pass="";
$db="demo";
$con=mysqli_connect($host,$users,$pass,$db);
if($con){
    echo "";
}
else
{
    echo "db not connected";
}
?>