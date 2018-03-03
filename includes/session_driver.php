<?php
  session_start ();
  if (isset($_SESSION['login_id'])) {
    $user_id  = $_SESSION['login_id'];
    header("location:../drivers/index.php");
  } else {
    header("location:../index.php");
    die;
  }
?>
