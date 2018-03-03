<?php

/**
 * this is the users superclass class handling all generic user operations
 */
class User
{
  private $first_name;
  private $last_name;
  private $phone_number;
  private $username;
  private $hashed_password;
  private $email;
  private $address;
  private $user_type;
  public $db;

  function __construct($first_name,$last_name,$phone_number,$username,$hashed_password,$email,$address,$user_type,$db)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->phone_number = $phone_number;
    $this->username = $username;
    $this->hashed_password = $hashed_password;
    $this->email = $email;
    $this->address = $address;
    $this->user_type = $user_type;
    $this->db = $db;
  }

  function kk() {
    //this function is used to try out variables
    //echo $this->portfolio;
  }

  function addUser() {
    $db9 =$this->db;

      $insert = $db9->prepare("INSERT INTO `users` (`user_id`,`first_name`,`last_name`,`username`,`hashed_password`,`email`,`phone_number`,`date_added`,`user_type`,`addresss`) values (null,?,?,?,?,?,?,NOW(),?,?)") or die($db9->error);

      $insert->bind_param ('ssssssss',$this->first_name,$this->last_name,$this->username,$this->hashed_password,$this->email,$this->phone_number,$this->user_type,$this->address);

      if($insert->execute()) {
        echo "user added OK";

        //header('location: here.php');
        //die();
      }
  }

  function verifyUser() {
    $db9 =$this->db;

    if($results = $db9->query("SELECT * FROM users WHERE username = '$this->username'")or die($db9->error)){
      if($results->num_rows < 1)  {
        //calling function that adds user
        $results->free();
        $good_news = 1;
        echo "good news ";
        return $good_news;
      } else if ($results->num_rows >= 1) {
        $results->free();
        echo "bad news ";
        $bad_news = 2;
        return $bad_news;
      }
    }
  }

  function getUserid() {
    $db9 =$this->db;
echo " getUserid function is working";
    if($results = $db9->query("SELECT user_id FROM users WHERE username = '$this->username' ORDER BY user_id DESC LIMIT 1")or die($db9->error)){

        while($row = $results->fetch_object())  {
        $id=$row->user_id;
        echo $id;
        return $id;
      }
      $results->free();
    }
  }

  function allUserStats() {
    $db9 =$this->db;
    if($results = $db9->query("SELECT count(user_id) AS all_users FROM users WHERE user_type !='admin'")or die($db9->error)){

        while($row = $results->fetch_object())  {
          $all_users =$row->all_users;
          echo "<td>".$all_users."</td>";
          //echo $all_users;
      }
      $results->free();
    }
  }

  function allEmployersStats() {
    $db9 =$this->db;
    if($results = $db9->query("SELECT count(user_id) AS all_employers FROM users WHERE user_type ='employer'")or die($db9->error)){

        while($row = $results->fetch_object())  {
          $all_employers =$row->all_employers;
          echo "<td>".$all_employers."</td>";
          //echo $all_users;
      }
      $results->free();
    }
  }

  function allDriversStats() {
    $db9 =$this->db;
    if($results = $db9->query("SELECT count(user_id) AS all_drivers FROM users WHERE user_type ='driver'")or die($db9->error)){

        while($row = $results->fetch_object())  {
          $all_drivers =$row->all_drivers;
          echo "<td>".$all_drivers."</td>";
          //echo $all_users;
      }
      $results->free();
    }
  }
}

 ?>
