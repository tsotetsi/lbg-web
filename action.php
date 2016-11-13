<?php
	include_once 'app/login_management.php';
?>

<?php

	if ($_SESSION['logged-user'] == "adminmrg") {
		echo "logged in";
	}
?>
<!DOCTYPE html>
<html>

	<head>
		<title>LBG Room Allocation</title>
	 	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	  	<link rel="stylesheet" type="text/css" href="/css/lbg.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  	<script src="/js/bootstrap.min.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-static-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="#">Liesbeeck Gardens</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Home-Admin</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="container">
		  <div class="row text-center">
		    <div class="col-sm-12">
		      <h3 class="text-center"></h3>

		      <?php
		      	include_once 'data/view/admin_action.php';
		      ?>
		    </div>
		  </div>

			<ul class="pager">
		    	<li><a href="/admin.php">Return to Admin Page</a></li>
		  	</ul>
		</div>
	</body>
</html>