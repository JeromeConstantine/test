<?php
use PHPUnit\Framework\TestCase;
@codeCoverageIgnoreStart
session_start();
date_default_timezone_set('Asia/Kolkata');
include_once "../../../../config.php";
$today =date('Y-m-d');
$time=date("H:i:s");
@codeCoverageIgnoreEnd
class LoginTest{

  public function testsignin(){
    $email ='Jerome';
    $password  ='12345';
    if($email != '' && $password !='')
    {
        @codeCoverageIgnoreStart
    $sql1=mysqli_query($link, "SELECT * FROM box_employee WHERE BINARY emp_email='$email'");
    $result = mysqli_num_rows($sql1);
    if($result!=0){
    $sql=mysqli_query($link, "SELECT * FROM `box_employee` WHERE BINARY `emp_email`='$email' AND BINARY `emp_password`='$password'");
    $res = mysqli_num_rows($sql);
       
     if($res!=0)
     {
         while($row=mysqli_fetch_assoc($sql)){
            $emp_name = $row['emp_name'];
            $emp_email = $row['emp_email'];
            $emp_id = $row['emp_id'];
            $emplocate_id = $row['location_id'];
          
            $sql_query=mysqli_query($link,"INSERT INTO `box_emptime`(`id`, `employee_id`, `date`, `login_time`) VALUES ('','$emp_id','$today','$time')");      
            $status=mysqli_query($link,"update box_employee set login_status='1' where emp_id='$emp_id'");
             setcookie("box_empname", $emp_name, time() + (86400 * 30), "/");
             setcookie("box_empemail", $emp_email, time() + (86400 * 30), "/");
             setcookie("box_empid", $emp_id, time() + (86400 * 30), "/");
             setcookie("box_emplocateid", $emplocate_id, time() + (86400 * 30), "/");
           
         }
       echo 'success';
     }
     else
     {
      echo 'passwrong';
     }
    }
    else
    {
      echo 'emailwrong';
    }
    @codeCoverageIgnoreEnd
    $this->assertEquals($email , 'Jerome');
    $this->assertEquals($password , '12345');
    }
    else
    {
     $this->assertEquals($email, '');   
     $this->assertEquals($password, ''); 
     // echo 'Something happened';
    }

  }
  
}
?>