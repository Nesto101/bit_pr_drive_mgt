<?php
//destroying cookiesetcookie
setcookie("user_id","",time()-6000000);
setcookie("idea_id","",time()-6000000);

//destroying session
session_start ();
if (isset($_SESSION['login_id'])) {
    $login_id = $_SESSION['login_id'];
    } else {
      die;
    }
if (session_destroy ()) {
    header("location:../index.php");
    }
?>
