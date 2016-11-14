<?php
	session_start();
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == 'frans' && $password == 'lbg2017') {
			$_SESSION['authenticated'] = 'true';
			header('Location: admin.php');
		}
		else {
			header('Location: login.php');
		}
	}
?>