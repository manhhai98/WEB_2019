<?php 
include 'account.php';
// include 'login.php';

//connection variables
$SERVER = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "restaurant";

$conn = mysqli_connect($SERVER, $DB_USER, $DB_PASS, $DB_NAME);

$message = null;
//logger
function consoleLog($message){
	 echo "<script>console.log(".json_encode($message).")</script>";
}

//connection check
if (mysqli_connect_errno()) {
	$message = "Failed connection";
	consoleLog($message);
} else {
	$message = "Success connection";
	consoleLog($message);
}

//addAccount
 function addAccount($username, $password, $name, $email, $paymentMethod, $bankNum) {
	$account = new Account($username, $password, $name, $email, $paymentMethod, $bankNum);
	
	$username = $account->username;
	$password = $account->password;
	$encryptedPass = encrytPassword($password);
	$name = $account->name;
	$email = $account->email;
	$paymentMethod = $account->paymentMethod;
	$bankNum = $account->bankNum;

	$sql = "INSERT INTO account(username, password, name, email, payment_method, bank_number) VALUES ('$username',$encryptedPass, '$name', '$email', '$paymentMethod', '$bankNum')";
	
	global $conn;
		if ((mysqli_query($GLOBALS['conn'], $sql) === true)) {
			consoleLog("inserted new account into db");
		return true;	
		} else {
			consoleLog("tasks failed sucessfully hehe");
			return false;
		}
	}

//todo: get this from front end and encrypt xD
addAccount("username", "password", "dumasdfasdfb", "dumb", "dumb", "dumb");
//todo: check from db if user exists

 ?>
