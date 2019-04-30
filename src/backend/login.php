<?php 
    include 'register.php';

    global $conn;
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo $username;
    echo $password;

 //todo: check to db
    
    if ($conn == null) {
    	consoleLog("connection died");
    }

    function encrytPassword($rawPass){
    	$cryptedPass = crypt($rawPass, '$2a$15$Ku2hb./9aA71tPo/E015h.$');
    }

    function findAccount($username, $rawPass){
        global $conn;
        $encrytPassword = encrytPassword($rawPass);
    	$sql = "SELECT * FROM account WHERE username = '$username' AND password = '$encrytPassword'";
        $result = $conn->query($sql);
    	if (mysqli_num_rows($result) == 1 ) {
    		echo "matcheddddd";
    	} else {
    		echo "nopeee";
    	}
    }

    encrytPassword($password);
    findAccount($username, $password);


?>