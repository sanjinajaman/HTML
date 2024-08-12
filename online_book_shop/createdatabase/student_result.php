<?php
$host="localhost";
$user="root";
$password="";
$dbname="student";
$myconn=mysqli_connect($host,$user,$password,$dbname);

$stbl_stdresult="CREATE TABLE IF NOT EXISTS std_result(std_id INT (10) NOT NULL , 

subj_id VARCHAR (10) NOT NULL,
marks INT (3) NOT NULL,
FOREIGN KEY(std_id) REFERENCES stdinfo(std_id)
)";



$std_result=mysqli_query($myconn,$stbl_stdresult);
if($std_result)
{
  echo "student result  table created";

}
else{
    echo "Not created";
}
?>
