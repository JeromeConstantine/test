<?php
use PHPUnit\Framework\TestCase;

class LoginTest{

  public function testsignin(){
    $email ='Jerome';
    $password  ='12345';
    if($email != '' && $password !='')
    {
    $this->assertEquals($email , 'Jerome');
    $this->assertEquals($password , '12345');
    }
    else
    {
     $this->assertEquals($email, '');   
     $this->assertEquals($password, ''); 
    }

  }
  
}
?>