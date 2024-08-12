<?php 

$host="localhost";
$user="root";
$password="";
$mysql=mysqli_connect($host,$user,$password);
$sql="CREATE DATABASE student";
$result=mysqli_query($mysql,$sql);
if($result==TRUE)
{
    echo "Database Created";
}
else{
    echo "Not Created";
}
?>