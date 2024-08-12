<?php


$host="localhost";
$user="root";
$password="";
$dbname="student";

$myconn=mysqli_connect($host,$user,$password);

if($myconn==TRUE)
{
    echo "Connection Successful";
}
else{
    echo "Not Connection";
}

?>