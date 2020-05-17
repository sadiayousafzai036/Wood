<?php
$number = 0;
$timestamps = array();
if (isset($_COOKIE['Item1count']))
{
	$number =  $number + 1;
	$timestamps["Item1count"] = $_COOKIE["Item1count"];
}
else{
}
if (isset($_COOKIE['Item2count']))
{
	$number =  $number + 1;
	$timestamps["Item2count"] = $_COOKIE["Item2count"];
}
else{
}
if (isset($_COOKIE['Item3count']))
{
	$number =  $number + 1;
	$timestamps["Item3count"] = $_COOKIE["Item3count"];
}
else{
}
if (isset($_COOKIE['Item4count']))
{
	$number =  $number + 1;
	$timestamps["Item4count"] = $_COOKIE["Item4count"];
}else{
}
if (isset($_COOKIE['Item5count']))
{
	$number =  $number + 1;
	$timestamps["Item5count"] = $_COOKIE["Item5count"];
}
else{
}
if (isset($_COOKIE['Item6count']))
{
	$number =  $number + 1;
	$timestamps["Item6count"] = $_COOKIE["Item6count"];
}
else{
}
if (isset($_COOKIE['Item7count']))
{
	$number =  $number + 1;
	$timestamps["Item7count"] = $_COOKIE["Item7count"];
}
else{
}if (isset($_COOKIE['Item8count']))
{
	$number =  $number + 1;
	$timestamps["Item8count"] = $_COOKIE["Item8count"];
}
else{
}
if (isset($_COOKIE['Item9count']))
{
	$number =  $number + 1;
	$timestamps["Item9count"] = $_COOKIE["Item9count"];
}
else{
}
if (isset($_COOKIE['Item10count']))
{
	$number =  $number + 1;
	$timestamps["Item10count"] = $_COOKIE["Item10count"];
}else{
}

if ($number >=5){
arsort($timestamps);
$newtimestamps = array_slice($timestamps, 0, 5, true);
$notset=false;
}
else {
	$notset=true;
}
 ?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Products/Services</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li class="selected">
					<a href="products.html">Products/Services</a>
				</li>
				<li>
					<a href="news.html">News</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="login.html">Confidential</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div>
			<div class="body"  id="gallery">
				<ul class="tabs">
					<li>
						<a href="products.html">Sofas</a>
					</li>
					<li>
						<a href="tables.html">Tables</a>
					</li>
					<li>
						<a href="chairs.html">Chairs</a>
					</li>
					<li>
						<a href="last.php">Last Visited</a>
					</li>
					<li class="selected">
						<a href="most.php">Most Visited</a>
					</li>
						<li>
						<a href="top5ratings.php">Best Ratings</a>
					</li>
				</ul>
				<h1>Living Room</h1>
				<ul class="items">
					<li>
						<div>
							<h5>Most Five Visited Items</h5>
							<p> <?php
							if ($notset == true){
							echo "Visit atleast five items before coming to this page.<br>";	
							}
							else {
							echo "<ul>";
						
if ($number < 5){
	echo "Visit atleast five items before coming to this page.";
	echo "</ul>";
}
else
{
 foreach($newtimestamps as $key=>$value){
	 
	 if ($key == "Item1count"){
		 echo "<li>";
     echo "Treated Oak Flooring with wide Table and Bench<br>";
	 echo "</li>"; }
 
 if ($key == "Item2count"){
		 echo "<li>";
     echo "Cushioned Sofa in Cashmere<br>";
	  echo "</li>";
 }
 if ($key == "Item3count"){
		 echo "<li>";
     echo "McKenly Modern 69.7' Square Arm Sofa<br>";	 
 echo "</li>";
 }
 if ($key == "Item4count"){
		 echo "<li>";
     echo "Lambdin Wooden Sofa<br>";
 	  echo "</li>";
 }
 
 if ($key == "Item5count"){
		 echo "<li>";
     echo "Madeline Dining Table<br>";
 	  echo "</li>";
 }
 	 if ($key == "Item6count"){
		 echo "<li>";
     echo "Goodyear Solid Wood Dining Table<br>";
	 echo "</li>"; }
 
 if ($key == "Item7count"){
		 echo "<li>";
     echo "Belynda White Faux Marble Table Top Dining Table<br>";
	  echo "</li>";
 }
 if ($key == "Item8count"){
		 echo "<li>";
     echo "Neil Trestle Dining Table<br>";	 
 echo "</li>";
 }
 if ($key == "Item9count"){
		 echo "<li>";
     echo "Oak Wood Padded Folding Chair<br>";
 	  echo "</li>";
 }
 
 if ($key == "Item10count"){
		 echo "<li>";
     echo "Cheryll Solid Wood Cross back Side chair<br>";
 	  echo "</li>";
 }
 }
 echo "</ul>";
}
							}
 ?>
							<a href="products.html">Back</a></p>
						</div>
					
					</li>
				</ul>
				<div id="pagination">
					
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div id="links">
				<div class="showroom">
					<h4>Visit our Showroom</h4>
					<a href="gallery.html"><img src="images/show-room.png" alt="Img"></a>
					<p>
						4885 Wilson Street<br> Victorville, CA 92392<br><br> 760-962-9541<br><br> <a href="index.html">info@carvedcreations.com</a>
					</p>
				</div>
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
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="login.html">Confidential</a>
				</li>
			</ul>
			<p id="footnote">
				© Copyright 2023. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>