<?php session_start ();
if (isset($_SESSION['login_id'])) {
  $id = $_SESSION['login_id'];
} else {
  header("location:../index.php");
  die;
  }
?>
