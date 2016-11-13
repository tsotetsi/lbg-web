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
		        <li class="active"><a href="#">Home - Admin</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="container">
			<ul class="pager">
				<li><a href="./admin.php">Applications</a></li>
		    	<li><a href="./approvals.php">Approvals</a></li>
		    	<li><a href="./declines.php">Declines</a></li>
		  	</ul>
		  <div class="row">
		    <div class="col-sm-4">
		    </div>
		    <div class="col-sm-4">
		      <p class="bg-primary"> >> Block and Unblocking.</p>
				  <div class="table-responsive">          
				  <table class="table">
				    <thead>
				      <tr>
				        <th>Student#</th>
				        <th>Block Date</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>

	     			<?php
		      			include_once 'data/view/admin_block.php';
		      		?>

				      </tr>
				    </tbody>
				  </table>
				  </div>
	    
		    </div>
		    <div class="col-sm-4">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-sm-4"></div>		  	
		  	<div class="col-sm-4">
		  		<div class="panel panel-default">
					<form class="form-horizontal" method="post" action="confirmation_block.php">
					<fieldset>

					<!-- Form Name -->
					<legend class="text-center">Enter Student Number</legend>


				<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="last_name">Student#</label>  
					  <div class="col-md-6">
					  <input id="student_number" name="student_number" placeholder="Student number to block" class="form-control input-md" required="" type="text">  
					  </div>
					</div>

					</fieldset>
						<button class="btn btn-primary btn-small active center-block"><i class="icon-white icon-ok"></i> block</button> </br>
					</form>
				</div>		    
		    </div>
		    <div class="col-sm-4"></div>
		  
		  </div>
		</div>
	</body>
</html>