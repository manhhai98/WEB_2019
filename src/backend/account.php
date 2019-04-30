<?php
/**
  * Account
  */
 class Account{
 	public $username;
 	public $password;
 	public $name; 
 	public $email;
 	public $paymentMethod;
 	public $bankNum;
 	function __construct($name, $email, $paymentMethod, $bankNumber){
 		$this->name = $name;
 		$this->email = $email;
 		$this->paymentMethod = $paymentMethod;
 		$this->bankNumber = $bankNumber;
 	}

 } ?> 	
