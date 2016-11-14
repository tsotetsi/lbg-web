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
		        <li class="active"><a href="#">Home - RMT</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="container">
		  <div class="row">
		    <div class="col-sm-1">
		    </div>
		    <div class="col-sm-10">
		      <p class="bg-primary"> >> Approvals.</p>
				  <div class="table-responsive">          
				  <table class="table">
				    <thead>
				      <tr>
				        <th>Room#</th>
				        <th>Student#</th>
				        <th>Surname & Name</th>
				        <th>Mobile#</th>
				        <th>Gender</th>
				        <th>Date </th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
	     			<?php
		      			include_once 'data/view/admin_approvals_rmt.php';
		      		?>
				      </tr>
				    </tbody>
				  </table>
				  </div>
		    </div>
		    <div class="col-sm-1">
		    </div>
		  </div>
		</div>
	</body>
</html>