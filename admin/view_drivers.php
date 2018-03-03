<?php
include 'includes.php';
require '../includes/connect.php';
include '../classes/drivers.php';

//getting user id from session
$user_id = $_SESSION['login_id'];
setcookie ("user_id", $user_id, time() + 1000000000);
//echo $user_id;

$title = 'Admin| Add User';
require_once '../navigation/admin_header.php';
?>

<div class="col-md-6">
    <h1>ADMIN</h1>
<p>You can view Drivers here</p>
</div>

<table class='table table-striped'>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Date Added</th>
            <th>Address</th>
            <th>Driver Type</th>
            <th>Portfolio</th>
            <th>Date of Birth</th>
        </tr>
    </thead>
    <tbody>
<?php
$drivers = new Driver(0,0,$db,0);
$view_drivers = $drivers->viewDrivers();
?>
    </tbody>
</table>
<?php //include '../navigation/admin_footer.php';?>
