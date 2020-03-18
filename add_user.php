<?php

// Connect to server and select database.
$conn=mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'bbfde2f23076ea', '13418461')or die("cannot connect");
mysqli_select_db($conn,'heroku_9f74518f3cbe85c')or die("cannot select DB");

// get data that sent from form
$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$home=$_POST['home'];
$phone=$_POST['phone'];
$cell=$_POST['cell'];



$sql="INSERT INTO heroku_9f74518f3cbe85c.`user`(firstname, lastname, email, homeaddress, homephone, cellphone)VALUES('$first', '$last', '$email', '$home','$phone', '$cell')";
$result=mysqli_query($conn,$sql);

if($result){
echo "Successful<BR>";
header("Location:users.php");
}
else {
echo "ERROR";
}
mysqli_close($conn);
?>