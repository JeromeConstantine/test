<?php
namespace mockingjay;
include "config.php";
class login{
    public $connection;
    protected $today;
    protected $time;
    function __construct() {
    date_default_timezone_set('Asia/Kolkata');
    $this->today =date('Y-m-d');
    $this->time=date("H:i:s");
    $li = new config();
    $this->connection = $li->connect();
    }
    public function userlogin($email,$password){

    if($email !='' && $password !=''){
        $result = mysqli_query($this->connection,"SELECT * from box_employee where emp_email = '$email' and password='$password'");
        $count =  mysqli_num_rows ($result);
    if($count > 0){
        while($row=mysqli_fetch_assoc($result)){
            $emp_name = $row['emp_name'];
            $emp_email = $row['emp_email'];
            $emp_id = $row['emp_id'];
            $emplocate_id = $row['location_id'];
            $day = $this->today;
            $time = $this->time;
            $query="INSERT INTO `box_emptime`(`id`, `employee_id`, `date`, `login_time`) VALUES ('','$emp_id','$day','$time')";
            $sql_query=mysqli_query($this->connection,$query);      
            $status=mysqli_query($this->connection,"update box_employee set login_status='1' where emp_id='$emp_id'");
            //  setcookie("box_empname", $emp_name, time() + (86400 * 30), "/");
            //  setcookie("box_empemail", $emp_email, time() + (86400 * 30), "/");
            //  setcookie("box_empid", $emp_id, time() + (86400 * 30), "/");
            //  setcookie("box_emplocateid", $emplocate_id, time() + (86400 * 30), "/");
         }
            return 'success';
    }else{
            return 'failure';
    }
    }else{
        return 'empty';
    }
    }
    
}
$email =$_POST['emails'];
$password = $_POST['passwords'];
$result = new login();
$result->userlogin($email,$password);
?>