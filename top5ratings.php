<html>
  <head>
    <title>Top 5 rated products</title>
  </head>
  <body>
<?php

#mysql server details
$servername = "us-cdbr-iron-east-04.cleardb.net";
$username = "bbfde2f23076ea";
$password = "13418461";
$database = "heroku_9f74518f3cbe85c";



if (!($link = mysqli_connect($servername, $username, $password,$database))){
     echo "Could not connect to database";
    die("ERROR: Could not connect to database");
}

$query = "select pdt_name,ROUND(AVG(rating),1) FROM products  group by pdt_name order by AVG(rating) desc limit 5";
    
$result =  mysqli_query($link ,$query);
if(mysqli_num_rows($result)==0){
      echo "No products to fetch"."<br>";
}
else{
  while ($row = mysqli_fetch_assoc($result)) {
       echo $row['pdt_name']." - ".$row['ROUND(AVG(rating),1)']."<br>";
  }
}

mysqli_close($link);
?>
<h3> please click <a href = "index.html"> here</a> to return to products page of Carved Creations</h3>
<h3> please click <a href="">here</a> to return to Marketplace home page</h3>
</body>
</html>