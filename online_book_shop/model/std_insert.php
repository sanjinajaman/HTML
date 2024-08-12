<?php
$host="localhost";
$user="root";
$password="";
$dbname="student";

$myconn=mysqli_connect($host,$user,$password,$dbname);

$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$pass=$_POST['password'];

$add_data_sql="INSERT INTO stdinfo(std_name,address,email,password)values ('$name','$address','$email','$pass')";
$result=mysqli_query($myconn,$add_data_sql);
if($result==true)
{
    header("location: ../view/student_sign_up.php");
}

else
{
    echo "Not Inserted";
}
?>