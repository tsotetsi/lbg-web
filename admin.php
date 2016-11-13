<?php
	include_once 'app/login_management.php';
?>

<?php

	if ($_SESSION['logged-user'] == "adminmrg") {
		echo "logged in";
	}
?>

<?php
	include_once './data/view/templates/head.html';
?>

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
	        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<ul class="pager">
			<li><a href="#">Applications</a></li>
	    	<li><a href="./approvals.php">Approvals</a></li>
	    	<li><a href="./declines.php">Declines</a></li>
	    	<li><a href="./block.php">Block</a></li>
	    	<li><a href="./setup.php">Setup</a></li>
	  	</ul>
	  <div class="row">
	    <div class="col-sm-1">
	    </div>
	    <div class="col-sm-10">
	      <p class="bg-primary"> >>Applications.</p>
			  <div class="table-responsive">          
			  <table class="table">
			    <thead>
			      <tr>
			        <th>Room#</th>
			        <th>Student#</th>
			        <th>Name & Surname</th>
			        <th>Gender</th>
			        <th>Mobile# </th>
			        <th>Date of Application </th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>

     			<?php
	      			include_once 'data/view/admin_applications.php';
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