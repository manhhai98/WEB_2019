<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- My css -->
	<link rel="stylesheet" type="text/css" href="./../../assets/css/login.css">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="container" class="container-fluid">
		<div class="row" style="align-items: center; margin-top: 10%">
			<div class="col-sm-2"></div>
			<!-- Login form -->
			<div class="col-sm-3 card grow" style="background-color: #282828 ; opacity: 0.8; border-radius: 20px">
				<form action="http://127.0.0.1:81/hanu-web-2019/src/backend/login.php" style="margin: 70px 45px 70px 45px;", method="post">
					<div class="form-group">
						<label for="email" class="text-warning text-fancy-sm">Email address:</label>
						<input name= "email" type="text" class="form-control" placeholder="Your Email" id="mail" name="email">
					</div>
					<div class="form-group">
						<label for="pwd" class="text-warning text-fancy-sm">Password:</label>
						<input name= "password" type="password" placeholder="Your Password" class="form-control" id="pwd">
					</div>
					<button type="submit" class="btn btn-outline-warning btn-block"
						style="margin-top: 30%">Submit</button>
				</form>
			</div>
			<div class="col-sm-6 grow" style="text-align: center">
				<h4 class="text-fancy text-warning">Welcome</h4>
				<h1 style="font-size: 5em; color:white"><b>L`PAFFERT</b></h1>
				<h5 id="subtitle" style="margin: 0px 150px">RESTAURANT</h5>
			</div>
		</div>
	</div>
</body>

</html>