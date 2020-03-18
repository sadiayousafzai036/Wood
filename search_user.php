<?php

// Connect to server and select database.
$conn=mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'bbfde2f23076ea', '13418461')or die("cannot connect");
mysqli_select_db($conn,'heroku_9f74518f3cbe85c')or die("cannot select DB");

// get data that sent from form
$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$cell=$_POST['cell'];



$sql="SELECT * FROM heroku_9f74518f3cbe85c.`user`
    WHERE firstname = '{$first}' OR lastname = '{$last}'  OR email = '{$email}' OR homephone = '{$phone}' OR cellphone = '{$cell}'";
$result=mysqli_query($conn,$sql);

if($result){
echo "<table width='80%' border='1px' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>";
echo "<tr><td>firstname</td><td>lastname</td><td>email</td><td>phone</td><td>cell</td></tr>";
while ($row = mysqli_fetch_array($result))
{       
        
        echo "<tr><td>" .$row['firstname'] . "</td><td>"   . $row['lastname'] . "</td><td> " . $row['email'] . "</td><td> "  . $row['homephone'] . "</td><td> "  . $row['cellphone'] . "</td></tr>";
        echo "<br>";
}
echo "</table>";
}
else {
echo "No Record Found";
}
mysqli_close($conn);
?>