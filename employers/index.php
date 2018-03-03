<?php
include 'includes.php';
require '../includes/connect.php';

//getting user id from session and assigning it to a cookie
$user_id = $_SESSION['login_id'];
setcookie ("user_id", $user_id, time() + 1000000000);

$title = 'Employer| Home';
include '../navigation/employer_header.php';
?>

<div class="col-md-6">

    <h1>Employer</h1>
<p>Welcome to the Employer's section</p>
<p>Here you can ..</p>
</div>

<div class="col-md-6">
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Employer's name</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>First Name:</td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td>Last Name:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Username</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Address</td>
                        <td>Female</td>
                      </tr>
                        <tr>
                        <td>Location</td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                        <tr>
                        <td>Company Description</td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
<?php include '../navigation/employer_footer.php';?>