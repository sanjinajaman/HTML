<?php
include("../db/config.php");
$viewstdinfo="SELECT * from stdinfo";
$result=mysqli_query($myconn,$viewstdinfo);
echo '<table border = "2px" style="width:100%">
<tr>
<th>Student id</th>
<th>Name</th>
<th>Address</th>
<th>Email</th>
<th>Password</th>
<th colspan="2">Action</th>
</tr>';

while($row=mysqli_fetch_array($result))
{
    $std_id= $row['std_id'];
    $name=$row['std_name'];
    $address=$row['address'];
    $email=$row['email'];
    $password=$row['password'];
    echo '<tr>
    <td>'$std_id.'</td>
    <td>'$name.'</td>
    <td>'$address.'</td>
    <td>'$email.'</td>
    <td>'$password.'</td>
    <td> <a href="../model/delete.php?id='.$std_id.'">Delete</a></td>
    <td>Edit</td>
    </tr>';

}

echo '</table>'
?>