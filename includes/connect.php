<?php
$db = new mysqli('localhost','root','','khat');
global $db;
  
if($db->connect_errno) {
  die('Sorry, we are having some problems.');
}
?>