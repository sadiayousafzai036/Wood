 <?php
$cookie_name = "Item10";
setcookie($cookie_name, time(), time() + (7200),"/");
$cookie_item10 = "Item10count";
if (!isset($_COOKIE['Item10count'])) {
setcookie($cookie_item10,0, time() + (7200),"/");
}
else{
setcookie($cookie_item10,$_COOKIE["Item10count"]+1, time() + (7200),"/");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cheryll Solid Wood Cross back Side chair</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<div class="body" id="about">
				<div id="sidebar">
					<div class="body">
						<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/38.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/39.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/40.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
						<div class="contact">
							<p>
								For Order and Inquiries Please Call: <b>760-962-9541</b> Or you can visit us at: <b>4885 Wilson Street<br> Victorville, CA 92392</b>
							</p>
						</div>
					</div>
				</div>
				<div id="main">
					<h1>Cheryll Solid Wood Cross back Side chair</h1>
					<h4>Description</h4>
					<p>
Your dining chairs lend you the perfect perch to enjoy a meal while they reinforce the style set by your dinner table. Take this chair, for example: perfect for an understated country look, it's crafted from solid rubberwood with distressed details and a solid-hued finish. A double-cross back rounds this piece out with an additional touch of style that makes it perfect for a modern farmhouse. Arrives as a set of two.<h4>Warranty</h4>
					<p>
						Carved Creations provides a limited one-year warranty to the original purchaser of first-quality Carved Creations wood furniture from an authorized dealer that the furniture is free from defects in material and workmanship as noted. This warranty does not apply to purchasers of as-is or distressed products or display samples. Color and finish variations are natural in wood and are not covered by this warranty.
						</p>
					<h4>Deals and offers</h4>
					<p>
						We are not offering any deals or offers at this moment.</p>
				</div>
				<form id="myform" action="product_rating.php" method="post">
	 <input type="hidden" id="prodname" name="prodname" value="Cheryll Solid Wood Cross back Side chair">
	<label for="rating"><b>Rating:</b></label>
	<input type="hidden" id="rating" name="rating" value="">
	<p style="font-size: 30px; color: #F0F0F0; display: inline-block; text-shadow: 0 0 2px #666666;">
		<i class="fa fa-star fa-fw" data-index="0" ></i>
		<i class="fa fa-star fa-fw" data-index="1"></i>
		<i class="fa fa-star fa-fw" data-index="2"></i>
		<i class="fa fa-star fa-fw" data-index="3"></i>
		<i class="fa fa-star fa-fw" data-index="4"></i>
	</p> <br>
	<label for="review"><b>Review:</b></label><br>
	<textarea name="review" id="review" rows="4" cols="30" value=""></textarea><br>
	<input type="submit" name="submit" class="submit" value="Submit" />
 </form>
				<a href="chairs.html">Back</a> </p>
				
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
	<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="star_scripts.js" type="text/javascript"></script>
</body>
</html>
