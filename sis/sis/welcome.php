<?php
	if (isset($_POST['register']))
	{
		$studentNo = $_POST['sid'];
		$lastName = $_POST['ln'];
		$firstName = $_POST['fn'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];

		echo "WELCOME, " . $lastName . " " . $firstName . "!</br>" . 
		"Your ID number is " . $studentNo . "!</br>" . 
		"Your Email Address is " . $emailAddress . "! </br>" .
		"Your Password is ". $password . "! </br>" .
		"Your Birthday is ". $birthDate . "! </br>" . 
		"The Time is " . date('c');
	}
	else
	{
		header('location: register.php');
	}

?>


<!DOCTYPE html>
<html>
