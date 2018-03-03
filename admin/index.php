<?php
include 'includes.php';
require '../includes/connect.php';

//getting user id from session and assigning it to a cookie
$user_id = $_SESSION['login_id'];
setcookie ("user_id", $user_id, time() + 1000000000);

$title = 'Admin| Home';
require_once '../navigation/admin_header.php';
?>

<div class="col-md-6">

    <h1>ADMIN</h1>
<p>Welcome to the Admin's section</p>
<p>You have a bright future behind you</p>

<?php // include '../navigation/admin_footer.php';?>