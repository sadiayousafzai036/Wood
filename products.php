<?php

 echo  "Number of views: ".$visitcount;

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
					<a href="products.php">Products/Services</a>
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
					<li class="selected">
						<a href="products.php">Sofas</a>
					</li>
					<li>
						<a href="tables.php">Tables</a>
					</li>
					<li>
						<a href="chairs.php">Chairs</a>
					</li>
					<li>
						<a href="last.php">Last Visited</a>
					</li>
						<li>
						<a href="most.php">Most Visited</a>
					</li>
				</ul>
				<h1>Living Room</h1>
				<ul class="items">
					<li>
						<div class="frame">
							<img src="images/4.jpg" alt="Img">
						</div>
						
						<?php
            $encoded_name = urlencode("Treated Oak Flooring with wide Table and Bench");
   	 $encoded_url = urlencode("https://sadiayousafzai2.herokuapp.com/one.php");
   	 $redirect_url = "http://ganesh041152080.ipage.com/marketplace/cookie_setter.php?name=".$encoded_name."&url=".$encoded_url;
    echo "<h4><a href=".$redirect_url.">Treated Oak Flooring with wide Table and Bench</a></h4>";    
?>

						<p>
							Wooden build can work well with any room decor.
						</p>
						<div class="details">
							<h5>Details</h5>
							<p>
								<b>Measurements:</b> 100" x 150" x 100"
							</p>
							<p>
								<b>Weight:</b> 150 lbs.
							</p>
						</div>
						<span class="price">$623.00</span>
					</li>
					<li>
						<div class="frame">
							<img src="images/sofa.jpg" alt="Img">
						</div>	<?php
            $encoded_name = urlencode("Cushioned Sofa in Cashmere");
   	 $encoded_url = urlencode("https://sadiayousafzai2.herokuapp.com/two.php");
   	 $redirect_url = "http://ganesh041152080.ipage.com/marketplace/cookie_setter.php?name=".$encoded_name."&url=".$encoded_url;
    echo "<h5><a href=".$redirect_url.">Cushioned Sofa in Cashmere</a></h5>";    
?>
						<p>
							Standard Sofa Cushion Dimensions Standard couch cushions are square. </p>
						<div class="details">
							<h5>Details</h5>
							<p>
								<b>Measurements:</b> 200" x 150" x 200"
							</p>
							<p>
								<b>Weight:</b> 250 lbs.
							</p>
						</div>
						<span class="price">$870.00</span>
					</li>
				</ul>
				<div id="pagination">
					<ul>
						<li>
							Pages:
						</li>
						<li class="selected">
							<a href="products.php">1</a>
						</li>
						<li>
							<a href="products1.php">2</a>
						</li>
					</ul>
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
					<a href="products.php">Products/Services</a>
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