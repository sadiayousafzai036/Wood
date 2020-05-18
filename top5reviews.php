<html>
<head>
    <title>Top 5 rated products based on best reviews</title>
</head>
<body>
<?php
ob_start();
/*
$servername = "localhost";
$username = "root";
$password = "mySql123";
$database = "happytummy";
*/

$servername = "us-cdbr-iron-east-04.cleardb.net";
$username = "bbfde2f23076ea";
$password = "13418461";
$database = "heroku_9f74518f3cbe85c";


if (!($conn = mysqli_connect($servername, $username, $password,$database))){
     echo "Could not connect to database";
    die("ERROR: Could not connect to database");
} 

//sentiment analysis initializer
include ('sentiment_analyser.php');
$sa = new SentimentAnalysis();
$sa->initialize();

$scores = array();


$sql = "select pdt_name,count(*) as count from products group by pdt_name";
$result = mysqli_query($conn,$sql);

if (!$result) {
    echo "Error message: ".mysqli_error($conn);
}

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	$eachscore = 0;
  	$name = $row["pdt_name"];
  	$count = $row["count"];
  	$query = "select review from products where pdt_name='$name'";
  	$reviews = mysqli_query($conn,$query);
  	if (!$reviews) {
    	echo "Error message: ".mysqli_error($conn);
	}

	//fetch review of each product
	if ($reviews->num_rows > 0) {
		while($eachreview = $reviews->fetch_assoc()) {
			$product = $eachreview["review"];
			$sa->analyse($product);
			$eachscore += $sa->return_sentiment_rating();
		}
    $scores[$name] = round(($eachscore/$count),1);
	}	
    
  }
} else {
  echo "No reviews has been provided for any products"."<br>";
}

arsort($scores);

foreach ($scores as $name => $value) {
   echo $name." - ".$value."<br>";
}

mysqli_close($conn);

?>
<h3> please click <a href = "https://sadiayousafzai2.herokuapp.com/index.html"> here</a> to return to products page of Carved Creations</h3>
<h3> please click <a href="http://ganesh041152080.ipage.com/marketplace/homepage.php">here</a> to return to Marketplace home page</h3>
</html>
