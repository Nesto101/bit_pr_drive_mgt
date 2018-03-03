<?php
//include '../classes/users.php';
/**
 * this is the driver class handling all driver operations
 */
class Driver
{
  private $vehicle;
  private $portfolio;
  public $db;
  private $DOB;


  function __construct($DOB,$vehicle,$db,$portfolio)
  {
    $this->DOB = $DOB;
    $this->vehicle = $vehicle;
    $this->db = $db;
    $this->portfolio = $portfolio;
  }

  function kk() {
    //this function is used to try out variables
    //echo $this->portfolio;
  }


  function addDriver($user_id) {
    $db9 =$this->db;
      $insert = $db9->prepare("INSERT INTO `driver` (`driver_user_id`,`driver_type_id`,`portfolio`,`DOB`) values (?,?,?,'$this->DOB')") or die($db9->error);

      $insert->bind_param ('iis',$user_id,$this->vehicle,$this->portfolio);

      if($insert->execute()) {
        //echo "portfolio : " .$this->portfolio;
        //echo " : Driver added";
        //header('location: here.php');
        //die();
      }
  }

  function viewDrivers() {
    $db9 =$this->db;
    if($result = $db9->query("SELECT users.user_id,users.first_name,users.last_name,users.username,users.email,users.phone_number,users.date_added,users.addresss,driver_type.type,driver.portfolio,driver.DOB FROM users,driver_type,driver WHERE users.user_id = driver.driver_user_id AND driver_type.driver_type_id = driver.driver_type_id AND user_type ='driver' ORDER BY first_name")or die($db9->error)) {

      while($row = $result->fetch_object())  {
      echo "<tr>";
      echo "<td>".$row->first_name."</td>";
      echo "<td>".$row->last_name."</td>";
      echo "<td>".$row->username."</td>";
      echo "<td>".$row->email."</td>";
      echo "<td>".$row->phone_number."</td>";
      echo "<td>".$row->date_added."</td>";
      echo "<td>".$row->addresss."</td>";
      echo "<td>".$row->type."</td>";
      echo "<td>".$row->portfolio."</td>";
      echo "<td>".$row->DOB."</td>";
      //echo "<td>"."<a href='delete_user.php?user_id= $row->user_id> Dele</a>"."</td>";
      echo "<td>"."<div class='span2'>
            <div class='btn-group'>
                <a class='btn dropdown-toggle btn-info' data-toggle='dropdown' href='#'>
                    Action
                    <span class='icon-cog icon-white'></span><span class='caret'></span>
                </a>
                <ul class='dropdown-menu'>
                    <li><a href='#'><span class='icon-wrench'></span> Modify</a></li>
                    <li><a href='#'><span class='icon-trash'></span> Delete</a></li>
                </ul>
            </div>
        </div>"."</td>";
      echo "</tr>";
    }
    }
  }

  function allTruckDriversStats() {
    $db9 =$this->db;
    if($results = $db9->query("SELECT count(driver_user_id) AS truck_drivers FROM driver WHERE driver_type_id ='1'")or die($db9->error)){

        while($row = $results->fetch_object())  {
          $truck_drivers =$row->truck_drivers;
          echo "<td>".$truck_drivers."</td>";
          //echo $all_users;
      }
      $results->free();
    }
  }

  function allLorryStats() {
    $db9 =$this->db;
    if($results = $db9->query("SELECT count(driver_user_id) AS lorry_drivers FROM driver WHERE driver_type_id ='2'")or die($db9->error)){

        while($row = $results->fetch_object())  {
          $lorry_drivers =$row->lorry_drivers;
          echo "<td>".$lorry_drivers."</td>";
          //echo $all_users;
      }
      $results->free();
    }
  }

  function allBusStats() {
    $db9 =$this->db;
    if($results = $db9->query("SELECT count(driver_user_id) AS bus_drivers FROM driver WHERE driver_type_id ='3'")or die($db9->error)){

        while($row = $results->fetch_object())  {
          $bus_drivers =$row->bus_drivers;
          echo "<td>".$bus_drivers."</td>";
          //echo $all_users;
      }
      $results->free();
    }
  }
}

 ?>
