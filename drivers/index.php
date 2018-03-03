<?php
include 'includes.php';
require '../includes/connect.php';

//getting user id from session and assigning it to a cookie
$user_id = $_SESSION['login_id'];
echo $user_id; echo 'hello man'; echo 'aahhhhhhhh';
setcookie ("user_id", $user_id, time() + 1000000000);

$title = 'Drivers| Home';
require_once '../navigation/driver_header.php';
?>

<div class="col-md-6">
    <h2>Y</h2>
<p>Welcome to the Drivers section</p>
<p>Swalalalala</p>
</div>
<p>comon man</p>
<?php include '../navigation/driver_footer.php';?>
