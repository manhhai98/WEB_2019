<?php
include '../../configs/connect_db.php';
include './menu_action.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Menu</title>

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

	<div id="img">
		<img src="../../assets/img/barbecue-barbeque-bbq-1268551.jpg" alt="food" style="width: 100%; height: 500px; margin-top: 40px;">
		<div class="center" style="font-size: 30px; font-family: none;">THE BEST IN TOWN</div>

		<div class="center" style="margin-top: 80px; font-size: 40px;">
			<h2>MENU</h2>
		</div>
	</div>

	<div id="main-content">
		<div class="menu" style="border-bottom: solid;border-color: red;">
			<ul>
				<li><a href="#" class="item" id="active">ALL</a></li>
				<li><a href="#" class="item">MAIN DISH</a></li>
				<li><a href="#" class="item">APPETIZER</a></li>
				<li><a href="#" class="item">DESSERT</a></li>
				<li><a href="#" class="item">DRINK</a></li>
				<li style="float: right;">
					<div class="search-container">
						<!-- Search form to search for dishes -->
						<form action="menu.php" method="post">
							<input type="text" placeholder="Search.." name="search">
							<button name="search_btn" type="submit"><i class="fa fa-search" style="color: white;"></i></button>
						</form>
					</div>
				</li>
			</ul>
		</div>

		<div class="food-menu">
			<!-- For each result -> loop to create dish -->
			<?php
			if (count($result_array) == 0) {
				echo "<h1> No Dish available </h1>";
			} else {
				foreach ($result_array as $item) {
					$max_desc_len = 80;
					$name = $item["dish_name"];
					$img_link = $item["url"];
					$desc = substr($item["dish_description"], 0, $max_desc_len);
					?>
					<a href="#">
						<div id="main-dish" class="food-item">
							<img src=<?php echo "../../assets/img/$img_link" ?> style="width: 250px; height: 150px;">
							<h3 style="color: #000000;"><?php echo $name ?></h3>
							<p style="color: #000000; font-size: 15px; opacity: 0.8; margin-top:12px"><?php echo $desc ?></p>
						</div>
					</a>
				<?php
			}
		}
		?>
		</div>
	</div>
	<?php include_once '../common/footer.php' ?>
</body>

</html>

<?php mysqli_close($conn); ?>