<?php
// include_once 'register.php';
//connection variables
$SERVER = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "restaurant";

$conn = mysqli_connect($SERVER, $DB_USER, $DB_PASS, $DB_NAME);

function encrytPassword($rawPass) {
	return $cryptedPass = crypt($rawPass, '$2a$15$Ku2hb./9aA71tPo/E015h.$');
}

function consoleLog($message) {
	echo "<script>console.log(" . json_encode($message) . ")</script>";
}

function checkExistEmail($email) {
	global $conn;
	$sql = "SELECT * FROM account WHERE email = '$email'";

	if (mysqli_num_rows($conn->query($sql)) > 0) {
		return true;
	} else {
		return false;
	}
}
?>