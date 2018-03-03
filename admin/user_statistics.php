<?php
include 'includes.php';
require '../includes/connect.php';
include '../classes/users.php';
include '../classes/employers.php';
include '../classes/drivers.php';

//getting user id from session
$user_id = $_SESSION['login_id'];
setcookie ("user_id", $user_id, time() + 1000000000);
//echo $user_id;

$title = 'Admin| Add User';
require_once '../navigation/admin_header.php';
?>

<div class="col-md-6">
    <h1>User Statistics</h1>
<p>You can view the user statististical numbers here</p>
</div>

<table class='table table-striped'>
    <thead>
        <tr>
            <th>All Users</th>
            <th>Employers</th>
            <th>Drivers</th>
            <th>Truck Drivers</th>
            <th>Lorry Drivers</th>
            <th>Mini Bus Drivers</th>
        </tr>
    </thead>
    <tbody>
    <tr>
<?php
//all users
$user_stats = new User(0,0,0,0,0,0,0,0,$db);
$all_users = $user_stats->allUserStats();
//all employers
$all_employers = $user_stats->allEmployersStats();
//all drivers
$all_drivers = $user_stats->allDriversStats();
//truck drivers
$user_stats = new Driver(0,0,$db,0);
$truck_drivers = $user_stats->allTruckDriversStats();
//lorry drivers
$lorry_drivers = $user_stats->allLorryStats();
//mini bus drivers
$bus_drivers = $user_stats->allBusStats();
?>
</tr>
    </tbody>
</table>

<div class="col-md-6">
<h1>Vacancy Statistics</h1>
<p>You can view the vacancy statististical numbers here</p>
</div>

<table class='table table-striped'>
    <thead>
        <tr>
            <th>All vacancies</th>
            <th>Applied Vacancies</th>
            <th>Vacancies not applied for</th>
            <th>Truck Vacancies</th>
            <th>Lorry Vacancies</th>
            <th>Mini Bus Vacancies</th>
        </tr>
    </thead>
    <tbody>
    <tr>
<?php
/*
$user_stats = new User(0,0,0,0,0,0,0,0,$db);
$all_users = $user_stats->allUserStats();
//all employers
$all_employers = $user_stats->allEmployersStats();
//all drivers
$all_drivers = $user_stats->allDriversStats();
//truck drivers
$user_stats = new Driver(0,0,$db,0);
$truck_drivers = $user_stats->allTruckDriversStats();
//lorry drivers
$lorry_drivers = $user_stats->allLorryStats();
//mini bus drivers
$bus_drivers = $user_stats->allBusStats();
*/
?>
</tr>
    </tbody>
</table>
<?php //include '../navigation/admin_footer.php';?>
