<?php session_start(); ?>
<?php
	if( (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] != "") || (isset($_COOKIE['is_logged_in']) && $_COOKIE['is_logged_in'] != "")) {
        @header('location: dashboard.php');
        exit;
    }
?>
<?php include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php';?>
<?php include 'inc/header.php'; 
?>

	  <div class="container">
	  	<div class="row">
	  			<div class="col-md-6 col-md-offset-3">
	  				<?php include 'inc/notification.php'; ?>
					<form class="form-horizontal" method="POST" action="login_process.php">
					  <div class="form-group">
					    <label for="inputUsername"  class="col-sm-2 control-label login-ele" style="color: white !important;">Username</label>
					    <div class="col-sm-10">
					      <input type="text" required class="form-control" id="inputUsername" placeholder="Username" name="username">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 control-label login-ele"  style="color: white !important;">Password</label>
					    <div class="col-sm-10">
					      <input type="password" required class="form-control" id="inputPassword3" placeholder="Password" name="password">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <div class="checkbox">
					        <label class="login-ele"  style="color: white !important;">
					          <input type="checkbox" checked name="remember" value="1"> Remember me
					        </label>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-success" name="signin" value="1">Sign in</button>
					       <button type="reset" class="btn btn-danger" name="reset" value="0">Reset</button>
					    </div>
					  </div>
					</form>
				</div>
		</div>
</div>


<?php include 'inc/footer.php';
   
?>

