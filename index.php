<?php 
$title = 'Home';
include '/navigation/header.php';
?>
<div class="container">
	   <div class="jumbotron text-center">
	     <h1>KHAT DRIVER MANAGEMENT SYSTEM</h1>
	   </div>
	   <div class="row">
	     <div class="col-md-6">
    	<p> Please register if you are a new user</p>
			</div>

			<!-- Sign in form -->
			<div class="col-md-6">
		  <form class="form-inline" action="login.php" method="post">
				<div class="form-group">
					<label class="sr-only" for="username">Username</label>
					<input type="text" class="form-control" name="username" required="required" placeholder="Username">
				</div>
				<div class="form-group">
					<label class="sr-only" for="password">Password</label>
					<input type="password" class="form-control" name="password" required="required" placeholder="Password">
				</div>

          <input type="submit" class="btn btn-primary" name="login" value="login">
          <input type="reset" class="btn btn-warning" value="Clear">
			</form>
			
	
		 </div>
	   </div>
	</div>
<?php include '/navigation/footer.php';
?>