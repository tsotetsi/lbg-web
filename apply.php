<?php
	include_once './data/view/templates/head.html';
	include_once './data/view/templates/nav.html';
?>

<div class="container">
	<ul class="pager" style="text-align:left">
    	<li><a href="./floors.php">Back</a></li>
  	</ul>
  <div class="row">
    <div class="col-sm-3">
      <h3 class="text-center"></h3>
    </div>
    <div class="col-sm-6">
     	<div class="panel panel-default">
				<legend class="text-center">Applicant(s)</legend>
				<div class="text-center">
	      		<?php
	      			include_once 'data/view/applicants.php';
	      		?>
				</div>
      </div>
      <div class="panel panel-default">
				<form class="form-horizontal" method="post" action="confirmation.php">
					<fieldset>
					<legend class="text-center">Applying for Flat: <?php echo $_GET['id'] ?></legend>
					<div class="form-group">
						<input id="flat_number" name="flat_number" type="hidden" value="<?php echo $_GET['id'] ?>">
					  <label class="col-md-4 control-label" for="first_name">First Name</label>  
					  <div class="col-md-4">
					  <input id="first_name" name="first_name" placeholder="Enter your name" class="form-control input-md" required="" type="text"> 
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="last_name">Last Name</label>  
					  <div class="col-md-4">
					  <input id="last_name" name="last_name" placeholder="Enter your surname" class="form-control input-md" required="" type="text">  
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="student_number">Student#</label>  
					  <div class="col-md-4">
					  <input id="student_number" name="student_number" placeholder="abcdef001" class="form-control input-md" required="" type="text">
					  <span class="help-block">student number</span>  
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="gender">Gender</label>
					  <div class="col-md-4">
					  <div class="radio">
					    <label for="gender-0">
					      <input name="gender" id="gender-0" value="1" checked="checked" type="radio">
					      male
					    </label>
						</div>
					  <div class="radio">
					    <label for="gender-1">
					      <input name="gender" id="gender-1" value="2" type="radio">
					      female
					    </label>
						</div>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="mobile_number">Mobile#</label>  
					  <div class="col-md-4">
					  <input id="mobile_number" name="mobile_number" placeholder="+27831234567" class="form-control input-md" required="" type="text">
					  <span class="help-block">e.g +27831234567</span> 
                      <span style="color: red">Please use mobile number format as above. i.e +27 and your mobile number without the leading zero to receive sms notifications.</span>
					  </div>
					</div>
					</fieldset>
					<button class="btn btn-primary btn-small active center-block"><i class="icon-white icon-ok"></i> apply</button> </br>
				</form>
      </div>
    </div>
    <div class="col-sm-6">
      <h3 class="text-center"></h3> 
    </div>
  </div>
</div>
<?php
	include_once './data/view/templates/footer.html';
?>