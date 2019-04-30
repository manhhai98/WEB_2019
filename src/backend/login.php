<?php
include_once 'functionHelper.php';

global $conn;
$email = $_POST["email"];
$password = $_POST["password"];

if ($conn == null) {
	consoleLog("connection died");
}

function findAccount($email, $rawPass) {
	global $conn;
	$encrytPassword = encrytPassword($rawPass);

	$sql = "SELECT * FROM account WHERE email = '$email' AND password = '$encrytPassword'";
	$result = $conn->query($sql);

	if (mysqli_num_rows($result) == 1) {
		consoleLog("Access granted");
	} else {
		$sql = "SELECT * FROM account WHERE email = '$email'";
		$result = $conn->query($sql);
		if (mysqli_num_rows($result) == 1) {
			consoleLog("Access denied, wrong password");
		} else {
			consoleLog("Access denied, wrong combination");
		}
	}
}

findAccount($email, $password);

?>