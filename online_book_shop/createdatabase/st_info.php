<?php
$host="localhost";
$user="root";
$password="";
$dbname="student";
$myconn=mysqli_connect($host,$user,$password,$dbname);
$stbl_stdinfo="CREATE TABLE IF NOT EXISTS std_info(std_id INT (10) NOT NULL auto_increment,
PRIMARY KEY (std_id),
std_name VARCHAR (50) NOT NULL,
address VARCHAR (50) NOT NULL,
email VARCHAR (50) NOT NULL,
password VARCHAR (50) NOT NULL
)";


$std_info_result=mysqli_query($myconn,$stbl_stdinfo);
if($std_info_result==true)
{
    echo "stdinfo table created";

}
else{
    echo "die(mysql_error($myconn))";
}
?>