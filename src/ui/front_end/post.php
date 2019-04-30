<?php
include '../../configs/connect_db.php';
include './post_action.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Post</title>

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
		<img src="../../assets/img/images.jpg" alt="food" style="width: 100%; height: 500px; margin-top: 40px;">
		<div class="center" style="font-size: 30px; font-family: none;">THE BEST IN TOWN</div>

		<div class="center" style="margin-top: 80px; font-size: 40px;">
			<h2>POST</h2>
		</div>
	</div>

	<div id="main-content">
		<div class="menu" style=" margin-bottom: 20px;border-bottom: solid;border-color: red;">
			<ul>
				<li><a href="#" class="item">
						<h1>ALL POSTS</h1>
					</a></li>
				<li style="float: right;">
					<div class="search-container">
						<form action="post.php" method="post">
							<input name="search" type="text" placeholder="Search.." >
							<button name="search_btn" type="submit"><i class="fa fa-search" style="color: white;"></i></button>
						</form>
					</div>
				</li>
			</ul>
		</div>

		<div class="post" style="background-color: #ffffff;">
			<?php
				if (count($result_array) == 0) {
					echo "<h1 style='color:#000000'> No Posts available </h1>";
				} else {
					foreach ($result_array as $item) {
						$author = $item["author"];
						$content = $item["content"];
						$date = $item["update_date"];
						$title = $item["dish_name"];
						$img_link = $item["url"]
			?>
			<!-- Layout for each posts -->
			<div class="item">
				<a href="#"><img src=<?php echo "../../assets/img/$img_link" ?>></a>
				<a href="#">
					<h1><?php echo $title ?></h1>
				</a>
				<i><?php echo $date ?></i>
				<i>by <?php echo $author ?></i>
				<br>
				<p><?php echo $content ?></p>
			</div>
			<?php
					}
				}
			?>
		</div>
	</div>

	<?php include_once '../common/footer.php' ?>
	
</body>

</html>