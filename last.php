<?php
$number = 0;
$timestamps = array();
if (isset($_COOKIE['Item1']))
{
	$number =  $number + 1;
	$timestamps["Item1"] = $_COOKIE["Item1"];
}
else{
}
if (isset($_COOKIE['Item2']))
{
	$number =  $number + 1;
	$timestamps["Item2"] = $_COOKIE["Item2"];
}
else{
}
if (isset($_COOKIE['Item3']))
{
	$number =  $number + 1;
	$timestamps["Item3"] = $_COOKIE["Item3"];
}
else{
}
if (isset($_COOKIE['Item4']))
{
	$number =  $number + 1;
	$timestamps["Item4"] = $_COOKIE["Item4"];
}else{
}
if (isset($_COOKIE['Item5']))
{
	$number =  $number + 1;
	$timestamps["Item5"] = $_COOKIE["Item5"];
}
else{
}
if (isset($_COOKIE['Item6']))
{
	$number =  $number + 1;
	$timestamps["Item6"] = $_COOKIE["Item6"];
}
else{
}
if (isset($_COOKIE['Item7']))
{
	$number =  $number + 1;
	$timestamps["Item7"] = $_COOKIE["Item7"];
}
else{
}if (isset($_COOKIE['Item8']))
{
	$number =  $number + 1;
	$timestamps["Item8"] = $_COOKIE["Item8"];
}
else{
}
if (isset($_COOKIE['Item9']))
{
	$number =  $number + 1;
	$timestamps["Item9"] = $_COOKIE["Item9"];
}
else{
}
if (isset($_COOKIE['Item10']))
{
	$number =  $number + 1;
	$timestamps["Item10"] = $_COOKIE["Item10"];
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
					<li class="selected">
						<a href="last.php">Last Visited</a>
					</li>
					<li>
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
							<h5>Last Five Visited Items</h5>
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
	 
	 if ($key == "Item1"){
		 echo "<li>";
     echo "Treated Oak Flooring with wide Table and Bench<br>";
	 echo "</li>"; }
 
 if ($key == "Item2"){
		 echo "<li>";
     echo "Cushioned Sofa in Cashmere<br>";
	  echo "</li>";
 }
 if ($key == "Item3"){
		 echo "<li>";
     echo "McKenly Modern 69.7' Square Arm Sofa<br>";	 
 echo "</li>";
 }
 if ($key == "Item4"){
		 echo "<li>";
     echo "Lambdin Wooden Sofa<br>";
 	  echo "</li>";
 }
 
 if ($key == "Item5"){
		 echo "<li>";
     echo "Madeline Dining Table<br>";
 	  echo "</li>";
 }
 	 if ($key == "Item6"){
		 echo "<li>";
     echo "Goodyear Solid Wood Dining Table<br>";
	 echo "</li>"; }
 
 if ($key == "Item7"){
		 echo "<li>";
     echo "Belynda White Faux Marble Table Top Dining Table<br>";
	  echo "</li>";
 }
 if ($key == "Item8"){
		 echo "<li>";
     echo "Neil Trestle Dining Table<br>";	 
 echo "</li>";
 }
 if ($key == "Item9"){
		 echo "<li>";
     echo "Oak Wood Padded Folding Chair<br>";
 	  echo "</li>";
 }
 
 if ($key == "Item10"){
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