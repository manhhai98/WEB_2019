<?php
/**
 * Account
 */
class Account {
	public $username;
	public $password;
	public $email;
	public $paymentMethod;
	public $bankNumber;
	function __construct($username, $password, $email, $paymentMethod, $bankNumber) {
		$this->username = $username;
		$this->password = $password;
		$this->email = $email;
		$this->paymentMethod = $paymentMethod;
		$this->bankNumber = $bankNumber;
	}

}?>
