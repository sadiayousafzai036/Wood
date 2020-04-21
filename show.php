<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Home - Wood Working Website</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li class="selected">
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="products.html">Products/Services</a>
				</li>
				<li>
					<a href="news.html">News</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="Confidential.php">Confidential</a>
				</li>
			</ul>
		</div>
	</div>
	
<div id="contents">


			<div class="body" id="contact">
					<h1>List of Users</h1>

<table  style="display: inline-block;">
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

</table>
<a href="show1.php"><h1>Show Users from All Companies</h1></a>
		
</div>

		
				</div>

	<div id="footer">
		<div>
			<div id="links">
				<div class="showroom">
					<h4>Visit our Showroom</h4>
				<div>
					<h4>Recent Blog Posts</h4>
					<ul class="posts">
						<li>
							<span class="time">Apr 16</span>
							<p>
								<a href="blog.html">The Carving Master &amp; Owner</a> Maybe you’re looking for something diferent, something special.
							</p>
						</li>
						<li>
							<span class="time">Apr 15</span>
							<p>
								<a href="blog.html">5 Star Hotels We Supply</a> And we love the challenge of doing something diferent and something special.
							</p>
						</li>
						<li>
							<span class="time">Apr 14</span>
							<p>
								<a href="blog.html">How To Pick The Right Furniture For You</a> What’s more, they’re absolutely free! You can do a lot with them.
							</p>
						</li>
					</ul>
				</div>
				<div>
					<form action="#" method="post" id="newsletter">
						<h4>Join Our Newsletter</h4>
						<input type="text" value="Enter Email Address Here For Updates" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						<input type="submit" value="Sign up" class="btn2">
					</form>
					<div id="connect">
						<h4>Social Media</h4>
						<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
					</div>
				</div>
			</div>
			<ul class="navigation">
						<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="products.html">Products/Services</a>
				</li>
				<li>
					<a href="news.html">News</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="Confidential.php">Confidential</a>
				</li>
			</ul>
			<p id="footnote">
				© Copyright 2023. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>