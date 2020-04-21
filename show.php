<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Home - Wood Working Website</title>
</head>
<body>

<table style="border:1px solid black;margin-left:auto;margin-right:auto;">
  <tr>
    <th>List of Carved Creations Users</th>
  </tr>
  
	<?php

// Connect to server and select database.
$conn=mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'bbfde2f23076ea', '13418461')or die("cannot connect");
mysqli_select_db($conn,'heroku_9f74518f3cbe85c')or die("cannot select DB");


$sql="SELECT * FROM heroku_9f74518f3cbe85c.`user`";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result))
{       
        echo "<tr><td>".$row['firstname'] . "   "   . $row['lastname']."</td></tr>" ;
        
}

mysqli_close($conn);
?>
</body>
</html>