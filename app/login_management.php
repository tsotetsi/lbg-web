<?php

	// Define $username and $password
	$username=$_POST['username'];
	$password=$_POST['password'];

	if ($username == "admin") {

		session_start();
		$_SESSION['logged-user'] = 'adminmrg';

	}
	else{
		session_start();
		#print_r($_SESSION);
		if ($_SESSION['logged-user'] == 'adminmrg') {
			#header("Location: admin.php");
		}
		else{
			header("Location: login.php");
		}
	}
?>