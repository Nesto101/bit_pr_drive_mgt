<!DOCTYPE html>
<html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
		<link rel= "stylesheet" href="../css/sidebar.css">

  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

	<Nav class="navbar navbar-inverse" role="navigation">
	  <div class="container">
	     <div class="navbar-header">

			<!-- side nav bar toggle

			<button type="button" class="sidebar-toggle" id="menu-toggle" data-toggle="collapse" data-target="#sidebar-nav">

			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
v
			</button>
			-->
      <!-- ka mobile nav kaja -->

      		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
      			   <span class="sr-only">Toggle navigation</span>
      			   <span class="icon-bar"></span>
      			   <span class="icon-bar"></span>
      			   <span class="icon-bar"></span>
      			   <span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="index.php">KHAT DMS</a>
      		 </div>
      		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      		    <ul class="nav navbar-nav">
      					<li><a href="index.php">Home</a></li>
                <li><a href="add_user.php">Profile</a></li>
      					<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Vacanies <b class="caret"></b></b></a>
      						<ul class="dropdown-menu">
      							<li><a href="#">New Vacancy</a></li>
      							<li class="divider"></li>
      							<li><a href="#">My Vacancies</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Applied Vacancies</a></li>
                    <li class="divider"></li>
                    <li><a href="#">All Vacancies</a></li>
      						</ul>
      						</li>
                  <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Jobs <b class="caret"></b></b></a>
      						<ul class="dropdown-menu">
      							<li><a href="#">New Job</a></li>
      							<li class="divider"></li>
      							<li><a href="#">Active Jobs</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Completed Jobs</a></li>
      						</ul>
      						</li>
              </ul>

      <!-- navbar to the right -->
      				<ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="log_out.php">Logout</a></li>
                <li class="divider"></li>
              	<li><a href="#">Help</a></li>
              </ul>
              </li>
              </ul>
      		 </div>
      	  </div>
      	</Nav>
      	<!-- Page content -->
