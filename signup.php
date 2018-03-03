<?php
$title = 'SignUp';
include '/navigation/header.php';
?>
<script>
		function show()
{
var radios = document.getElementsByName("radios");
var unit =  document.getElementById("unit");
var box =  document.getElementById("box");

        box.style.display = 'none';
for(var i = 0; i < radios.length; i++) {

 radios[i].onclick = function() {
    var val = this.value;
    if(val == 'radio1' ){
        unit.style.display = 'block';
        box.style.display = 'none';
    }
    else if(val == 'radio2'){
         unit.style.display = 'none';
         box.style.display = 'block';
    }

  }
 }
}
show();
		</script>
<div class="container">
	   <div class="jumbotron text-center">
	     <h1>KHAT DRIVER MANAGEMENT SYSTEM</h1>
	   </div>
	   <div class="row">
	     <div class="col-md-6">
    	<p> Register here</p>
			</div>


			<!-- Sign in form -->
			<div class="col-md-6">
      <h2>Sign Up</h2>

		<input type="radio" id="radio1" name="radios" value="radio1" onload="show();" onclick="show();" checked>
    <label for="radio1">Driver</label>

    <input type="radio" id="radio2" name="radios" value="radio2" onclick="show();" >
    <label for="radio2">Employer</label>
<section>
      <form class="form-horizontal" action="models/signup_model.php" method="post" id="unit">

      <div class="form-group">
      <label class="sr-only" for"first_name"></label>
      <div class="col-xs-6">
      <input type="text" class="form-control" id="first_name" name="first_name" required="required" placeholder="First Name">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"last_name"></label>
      <div class="col-xs-6">
      <input type="text" class="form-control" id="last_name" name="last_name" required="required" placeholder="Last Name">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"phone_number"></label>
      <div class="col-xs-6">
      <input type="text" class="form-control" id="phone_number" name="phone_number" required="required" placeholder="Phone Number">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"username"></label>
      <div class="col-xs-6">
      <input type="text" class="form-control" id="username" name="username" required="required" placeholder="Username">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"email"></label>
      <div class="col-xs-6">
      <input type="email" class="form-control" id="email" name="email"placeholder="Enter email address">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"DOB">Date of Birth</label>
      <div class="col-xs-4">
      <p>Date of Birth<input type="date" class="form-control" id="DOB" name="DOB" required="required" placeholder="Date of Birth"></p>
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"password"></label>
      <div class="col-xs-6">
      <input type="password" class="form-control" id="password" name="password" required="required" placeholder="Password">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"password2"></label>
      <div class="col-xs-6">
      <input type="password" class="form-control" id="password2" name="password2" required="required" placeholder="Re-type password">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"address"></label>
      <div class="col-xs-6">
      <textarea class="form-control" id="address" rows="2" name ="address" placeholder="Enter physical Address" ></textarea>
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"vehicle">Select Vehicle</label>
      <div class="col-xs-10">
      <p>Vehicle driven</p>
      <p>Truck <input type="radio"  id="truck" name="vehicle" value="1" required="required" placeholder="Truck">
      Lorry <input type="radio" id="lorry" name="vehicle" value="2" required="required" placeholder="Lorry">
      Minibus <input type="radio"  id="minibus" name="vehicle" value="3" required="required" placeholder="Minibus"></p>
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"portfolio">portfolio</label>
      <div class="col-xs-6">
      <textarea class="form-control" id="portfolio" rows="3" name ="portfolio" placeholder="Enter Portfolio" ></textarea>
      </div>
      </div>

      <input type="submit" class="btn btn-primary" name="Login" value="Add Driver">
      <input type="reset" class="btn btn-warning" value="Clear Values">

      </form>
			<form class="form-horizontal" action="models/sign_model.php" method="post" id="box">


      <div class="form-group">
      <label class="sr-only" for"first_name"></label>
      <div class="col-xs-6">
      <input type="text" class="form-control" id="first_name" name="first_name" required="required" placeholder="First Name">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"last_name"></label>
      <div class="col-xs-6">
      <input type="text" class="form-control" id="last_name" name="last_name" required="required" placeholder="Last Name">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"username"></label>
      <div class="col-xs-6">
      <input type="text" class="form-control" id="username" name="username" required="required" placeholder="Username">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"email"></label>
      <div class="col-xs-6">
      <input type="email" class="form-control" id="email" name="email"placeholder="Enter email address">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"phone_number"></label>
      <div class="col-xs-6">
      <input type="text" class="form-control" id="phone_number" name="phone_number" required="required" placeholder="Phone Number">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"company_name"></label>
      <div class="col-xs-6">
      <input type="text" class="form-control" id="company_name" name="company_name" required="required" placeholder="Company Name">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"location"></label>
      <div class="col-xs-6">
      <input type="text" class="form-control" id="location" name="location" required="required" placeholder="Location">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"password"></label>
      <div class="col-xs-6">
      <input type="password" class="form-control" id="password" name="password" required="required" placeholder="Password">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"password2"></label>
      <div class="col-xs-6">
      <input type="password" class="form-control" id="password2" name="password2" required="required" placeholder="Re-type password">
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"address"></label>
      <div class="col-xs-6">
      <textarea class="form-control" id="address" rows="2" name ="address" placeholder="Enter physical Address" ></textarea>
      </div>
      </div>

      <div class="form-group">
      <label class="sr-only" for"company_description"></label>
      <div class="col-xs-6">
      <textarea class="form-control" id="company_description" rows="2" name ="company_description" placeholder="Company Description" ></textarea>
      </div>
      </div>

      <input type="submit" class="btn btn-primary" name="login" value="Add Employer">
      <input type="reset" class="btn btn-warning" value="Clear Values">
      </form>
		 </div>
	   </div>
	</div>
</section>
<?php include '/navigation/footer.php';
?>
