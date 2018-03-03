<?php
//include '../classes/users.php';

/**
 * this is the driver class handling all driver operations
 */
class Employer
{
  public $db;
  private $company_description;
  private $location;


  function __construct($db,$company_description,$location)
  {

    $this->db = $db;
    $this->company_description = $company_description;
    $this->location = $location;
  }


  function kk() {
    //this function is used to try out variables
    //echo $this->portfolio;
  }

  function addEmployer($user_id) {
    echo $user_id;
    $db9 =$this->db;
      $insert = $db9->prepare("INSERT INTO `employer` (`employer_user_id`,`location`,`company_description`) values (?,?,?)") or die($db9->error);

      $insert->bind_param ('iss',$user_id,$this->location,$this->company_description);

      if($insert->execute()) {
        echo " : Employer added";
        //header('location: here.php');
        //die();
      }
  }

  function viewEmployers() {
    $db9 = $this->db;
    if($result = $db9->query("SELECT users.user_id,users.first_name,users.last_name,users.username,users.email,users.phone_number,users.date_added,users.addresss,employer.location, employer.company_description FROM users,employer WHERE users.user_id = employer.employer_user_id AND user_type ='employer' ORDER BY first_name")or die($db9->error)) {

      while($row = $result->fetch_object())  {
      echo "<tr>";
      echo "<td>".$row->first_name."</td>";
      echo "<td>".$row->last_name."</td>";
      echo "<td>".$row->username."</td>";
      echo "<td>".$row->email."</td>";
      echo "<td>".$row->phone_number."</td>";
      echo "<td>".$row->date_added."</td>";
      echo "<td>".$row->addresss."</td>";
      echo "<td>".$row->location."</td>";
      echo "<td>".$row->company_description."</td>";
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
}
 ?>
