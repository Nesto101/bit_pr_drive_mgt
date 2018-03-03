<?php
session_start ();
require 'includes/connect.php';

if(!empty($_POST)) {
    if(isset($_POST['username'], $_POST['password'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $hashed_password = sha1($password);

        //checking if it is a valid user
        $results = $db->query("SELECT * FROM users WHERE username = '$username' AND hashed_password = '$hashed_password'") or die($db->error);
        if($results->num_rows) {
            while($row =$results->fetch_object()) {
                $records[] = $row;
                echo" you can successfully login";
                //user is valid, now determining type of user
                $user_type = $row->user_type;
                $user_id = $row->user_id;
                $driver = "driver";
                $employer = "employer";
                $admin = "admin";

                if($user_type == $driver) {
                    //code to redirect driver here
                    $_SESSION['login_id'] =$user_id;
                    header("location:includes/session_driver.php");
                } else if($user_type == $employer){
                    //code to redirect employer here
                    $_SESSION['login_id'] =$user_id;
                    header("location:includes/session_employer.php");
                } else if($user_type == $admin) {
                    //code to redirect admin here
                    $_SESSION['login_id'] =$user_id;
                    header("location:includes/session_admin.php");
                }


            }
            $results->free();
        } else {
            echo "sorry, wrong username and password";
        }

        }
    }
?>
