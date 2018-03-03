<?php
include '../includes/connect.php';
include '../classes/employers.php';
include '../classes/drivers.php';
include '../classes/users.php';

//checking if user is admin
if(isset($_SESSION['login_id'])) {
    $session_user_id = $_SESSION['login_id'];
    setcookie ("user_id", $user_id, time() + 1000000000);
    //echo $user_id;
}



if(!empty($_POST)) {
    //checking if the post is for an employer or driver
    if(isset($_POST['company_name'])) {
        //if the user is an employer


        if(isset($_POST['first_name'], $_POST['last_name'], $_POST['username'],$_POST['email'],$_POST['phone_number'],$_POST['company_name'],$_POST['location'],$_POST['password'],$_POST['address'],$_POST['company_description'])) {

            $first_name = trim($_POST['first_name']);
            $last_name = trim($_POST['last_name']);
            $username = trim($_POST['username']);
            if(isset($_POST['email'])) {
                $email = trim($_POST['email']);
            } else {
                $email = "not available";
            }
            $phone_number = trim($_POST['phone_number']);
            $company_name = trim($_POST['company_name']);
            $location = trim($_POST['location']);
            $password = trim($_POST['password']);
            $address = trim($_POST['address']);
            $company_description = trim($_POST['company_description']);
            $user_type = "employer";
            $hashed_password = sha1($password);

            //creating new user
            $new_user = new User ($first_name,$last_name,$phone_number,$username,$hashed_password,$email,$address,$user_type,$db);

            //checking if the user already exists
            if ($new_user->verifyUser() == 1 ) {
                echo $new_user->addUser();
                //getting user_id
                $user_id = $new_user->getUserid();
                //echo $user_id;
                //entering new employer by instanciating employer class
                $adding_user = new Employer ($db,$company_description,$location,$company_name);
                    echo $adding_user->addEmployer($user_id);
                //redirecting to view employers page here if user is an admin else tells the user the account has been added
                 if(isset($session_user_id)){
                    header("location:../admin/view_employers.php");
                    } else {
                        header("location:../index.php");
                    }
            } else if ($new_user->verifyUser() == 2) {
                echo "username is already used";
            }


          } else {
          echo "nothing was posted at the employers section";
        }

        } else {
            //if the user is a driver

            if(isset($_POST['first_name'], $_POST['last_name'], $_POST['phone_number'], $_POST['username'], $_POST['DOB'], $_POST['password'], $_POST['address'], $_POST['vehicle'], $_POST['portfolio'])) {

                $first_name = trim($_POST['first_name']);
                $last_name = trim($_POST['last_name']);
                $phone_number = trim($_POST['phone_number']);
                $username = trim($_POST['username']);
                $DOB = trim($_POST['DOB']);

                if(isset($_POST['email'])) {
                    $email = trim($_POST['email']);
                } else {
                    $email = "not available";
                }

                $password = trim($_POST['password']);
                $address = trim($_POST['address']);
                $vehicle = trim($_POST['vehicle']);
                $portfolio = trim($_POST['portfolio']);
                $user_type = "driver";
                $hashed_password = sha1($password);

                //creating new user
                $new_user = new User ($first_name,$last_name,$phone_number,$username,$hashed_password,$email,$address,$user_type,$db);
                // instanciating a driver class
                $adding_user = new Driver ($first_name,$last_name,$phone_number,$username, $DOB, $hashed_password,$email,$address,$vehicle,$user_type,$db);


               // echo $address;
                //echo $adding_user->kk();

                //checking if the user already exists
                if ($new_user->verifyUser() == 1 ) {
                    echo $new_user->addUser();
                    //getting user_id
                    $user_id = $new_user->getUserid();
                    //echo $user_id;
                    //entering new driver by instanciating driver class
                    $adding_user = new Driver ($DOB,$vehicle,$db,$portfolio);
                        echo $adding_user->addDriver($user_id);
                    //redirecting to view drivers page if user is an admin else tells the user the account has been added
                    if(isset($session_user_id)){
                    header("location:../admin/view_drivers.php");
                    } else {
                        header("location:../index.php");
                    }

                } else if ($new_user->verifyUser() == 2) {
                    echo "username is already used";
                }
              } else {
              echo "nothing was posted at the drivers section";
            }

        }


    } else {
        echo "nothing to post";
    }
?>
