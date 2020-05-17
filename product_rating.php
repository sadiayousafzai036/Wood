<html>
<body>
<?php
extract ($_POST);

#mysql server details

$servername = "us-cdbr-iron-east-04.cleardb.net";
$username = "bbfde2f23076ea";
$password = "13418461";
$database = "heroku_9f74518f3cbe85c";


if (!($link = mysqli_connect($servername, $username, $password,$database))){
     echo "Could not connect to database";
    die("ERROR: Could not connect to database");
} 

$query = "insert into products VALUES('$prodname','$rating','$review')";
if (mysqli_query($link,$query)){
  echo "<h4 style = \"color:green\">" . "Your Rating and Review added succesfully." . "</h4>";
} else {
       echo "<h4 style = \"color:red\">" . "There was a problem adding rating and review. Please try again." . "</h4>";
}
mysqli_close($link);
?>
</body>
</html>
 