<?php
include ("config.php");
$sql="CREATE TABLE IF NOT EXISTS stdinfo(std_id INT (10) NOT NULL auto_increment

 PRIMARY KEY (std_id),

std_name VARCHAR (50) NOT NULL,
adress VARCHAR (50) NOT NULL,
email VARCHAR (50) NOT NULL,

Password VARCHAR (50) NOT NULL
)";

$result=mysqli_query($myconn,$sql);
if($result){
    echo "Student Info table created";
}

else{
    echo "Student Info table not created";
}

?>