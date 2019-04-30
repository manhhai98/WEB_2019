<!DOCTYPE html>
<html>

<head>
	<title>Register Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- My css -->
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- Register form -->
	<div class="col-sm-6 card" style="background-color: #282828 ; opacity: 0.8; border-radius: 20px">
		<form name="register_form" action="" style="margin: 70px 45px 70px 45px;">
			<div class="form-group">
				<label for="email" class="text-warning text-fancy-sm">Email address:</label>
				<input id="mail" name="email" type="text" class="form-control" placeholder="Your Email" >
				<label for="text" class="text-warning text-fancy-sm">Username :</label>
				<input id="mail" name="username" type="text" class="form-control" placeholder="Your Username" >
			</div>
			<div class="form-group">
				<label for="pwd" class="text-warning text-fancy-sm">Password:</label>
				<input id="pwd" name="password" type="password" placeholder="Your Password" class="form-control" >
				<label for="pwd" class="text-warning text-fancy-sm">Confirm Password:</label>
				<input id="pwd" name="password_confirm" type="password" placeholder="Confirm Password" class="form-control">
			</div>
			<button type="submit" class="btn btn-outline-warning btn-block" style="margin-top: 30%">Register</button>
		</form>

	</div>
</body>

</html>