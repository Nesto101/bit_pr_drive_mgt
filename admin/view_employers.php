<?php
include 'includes.php';
require '../includes/connect.php';
include '../classes/employers.php';

//getting user id from session
$user_id = $_SESSION['login_id'];
setcookie ("user_id", $user_id, time() + 1000000000);
//echo $user_id;

$title = 'Admin| Add User';
require_once '../navigation/admin_header.php';
?>

<div class="col-md-6">
    <h1>ADMIN</h1>
<p>You can view Employers here</p>
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
            <th>Location</th>
            <th>Company Description</th>
        </tr>
    </thead>
    <tbody>
<?php
$employers = new Employer($db,0,0);
$view_employers = $employers->viewEmployers();
?>
    </tbody>
</table>
<?php //include '../navigation/admin_footer.php';?>
