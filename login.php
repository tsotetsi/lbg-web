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
		        <li><a href="#">Home</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="container">
		  <div class="row">
		    <div class="col-sm-4">

		    </div>
		    <div class="col-lg-4">
				<form class="form-horizontal" method="post" action="admin.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Login</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="username">username</label>  
				  <div class="col-md-4">
				  <input id="username" name="username" placeholder="username" class="form-control input-md" required="" type="text">
				    
				  </div>
				</div>

				<!-- Password input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="password">password</label>
				  <div class="col-md-4">
				    <input id="password" name="password" placeholder="password" class="form-control input-md" required="" type="password">
				    
				  </div>
				</div>

				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="singlebutton"></label>
				  <div class="col-md-4">
				    <button id="submit" name="button" class="btn btn-primary">Login</button>
				  </div>
				</div>

				</fieldset>
				</form>
		    </div>
		    <div class="col-sm-4">
		    </div>
		  </div>
		</div>
	</body>
</html>