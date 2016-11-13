<?php

	// Define $username and $password
	$username = null;
	$password = null;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			if($username == 'frans' && $password == 'lbg2017') {
				session_start();
				$_SESSION['authenticated'] = 'true';
				header('Location: admin.php');
			}
			else {
				header('Location: login.php');
			}
		}
	}
?>