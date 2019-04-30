<?php 
	include_once '../../configs/connect_db.php' 
?>

<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>
<body>
	<header>
		<div id="container">
			<a href="index.php" class="logo"><img src="../../assets/img/Shulas-Restaurants-Hi-Res-Transparent-Background.png" alt="logo"></a>

			<div class="menu">
				<ul>
				<li><a href="index.php" class="item">Home</a></li>
					<li><a href="menu.php" class="item">Menu</a></li>
					<li><a href="post.php" class="item">Post</a></li>
					<li><a href="order.php" class="item">Order</a></li>
					<li style="float: right;"><a href="../login/register.php" class="btn"><button type="sign-in-button">Sign Up</button></a></li>
					<li style="float: right;"><a href="../login/login.php" class="btn"><button type="sign-up-button">Sign In</button></a></li>
				</ul>
			</div>
		</div>
	</header>

	<div id="slide">
		<div class="slideshow-container">
			<div class="mySlides fade"> <img src="../../assets/img/uppercrustpizza-blog-image-welcome-5915e642514b5.jpg" style="width:100%; height: 500px;"></div>
			<div class="mySlides fade"> <img src="../../assets/img/ishan-seefromthesky-1113278-unsplash-1024x651.jpg" style="width:100%; height: 500px;"></div>
			<div class="mySlides fade"> <img src="../../assets/img/ithaa-wedding.jpg" style="width:100%; height: 500px;"></div>
			<div class="mySlides fade"> <img src="../../assets/img/videoblocks-tropical-beach-with-beautiful-hotel-and-restaurant-in-africa-indian-ocean-zanzibar-the-rock-restaurant_rcfqy8jff_thumbnail-full01.png" style="width:100%; height: 500px;"></div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a> 
			<a class="next" onclick="plusSlides(1)">&#10095;</a> 
		</div>
		
		<div style="text-align:center;"> 
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
		</div>
	</div>

	<div id="main-content">
		<div class="about-us">
			<h1>About Us</h1>
			<div class="row">
				<div class="item">
					<a href="#"><img src="../../assets/img/images.png" style="width: 250px; height: 150px;"></a>
					<h3>aa</h3>
					<h6>aa</h6>
				</div>

				<div class="item">
					<a href="#"><img src="../../assets/img/images.png" style="width: 250px; height: 150px;"></a>
					<h3>aa</h3>
					<h6>aa</h6>
				</div>

				<div class="item">
					<a href="#"><img src="../../assets/img/images.png" style="width: 250px; height: 150px;"></a>
					<h3>aa</h3>
					<h6>aa</h6>
				</div>

				<div class="item">
					<a href="#"><img src="../../assets/img/images.png" style="width: 250px; height: 150px;"></a>
					<h3>aa</h3>
					<h6>aa</h6>
				</div>
			</div>
		</div>
		<br>
		<div class="our-menu">
			<h1>Our Menu</h1>
			<div class="row">
				<div class="item">
					<a href="#"><img src="../../assets/img/images.png" style="height: 250px;width: 300px;"></a>
				</div>

				<div class="item">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
				</div>
			</div>
		</div>

		<div class="find-us">
			<h1>Find Us</h1>
			<div class="row">
				<div class="item">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
				</div>
				<div class="item">
					<a href="#"><img src="../../assets/img/images.png" style="height: 250px;width: 300px;"></a>
				</div>
			</div>
		</div>
	</div>

	<?php include_once '../common/footer.php' ?>

	<script type="text/javascript" src="../../assets/js/slideshow.js"></script>
</body>
</html>

<?php mysqli_close($conn); ?>
