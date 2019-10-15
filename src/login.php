<?php

namespace App\Lib1;

class login{
    
    public function userlogin($email,$password)
    {
    include "config.php";
    
    $result = mysqli_query($link,"Select * from employee where email = '$email' and password = '$password'");
    $count =  mysqli_num_rows ( $result );
    
    echo "function Accessed";
    
    if($count > 0)
    {
        return 1;
    }else
    {
        return 0;
    }
    
    }
    
}

?>