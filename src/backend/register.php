<?php
include_once 'account.php';
// include_once 'login.php';
include_once 'functionHelper.php';
 global $conn;
$email = $_POST["email"];
$username = $_POST["username"];
$paymentMethod = $_POST["paymentMethod"];
$bankNumber = $_POST["bankNumber"];
$password = $_POST["password"];
 //connection check
if (mysqli_connect_errno()) {
	$message = "Failed connection";
	consoleLog($message);
} else {
	$message = "Success connection";
	consoleLog($message);
}
 //addAccount
function addAccount($username, $password, $email, $paymentMethod, $bankNumber) {
	$account = new Account($username, $password, $email, $paymentMethod, $bankNumber);
 	$username = $account->username;
	$password = $account->password;
	$encryptedPass = encrytPassword($password);
 	$email = $account->email;
	if (checkExistEmail($email)) {
		echo "email existed!";
		return false;
	} else {
		$paymentMethod = $account->paymentMethod;
		$bankNumber = $account->bankNumber;
 		$sql = "INSERT INTO account(username, password, email, payment_method, bank_number) VALUES ('$username', '$encryptedPass', '$email', '$paymentMethod', '$bankNumber')";
 		global $conn;
		if ((mysqli_query($GLOBALS['conn'], $sql) === true)) {
			consoleLog("inserted new account into db");
			return true;
		} else {
			echo ("Error description: " . mysqli_error($conn));
			return false;
		}
	}
}
 //todo: get this from front end and encrypt xD
 addAccount($username, $password, $email, $paymentMethod, $bankNumber);
//todo: check from db if user exists
 ?>