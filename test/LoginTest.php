<?php
require "/Users/jerome/Desktop/Jenkins/DemoProject/src/login.php";
use PHPUnit\Framework\TestCase;

class loginTest extends TestCase{
    
    protected $login;
    
    public function setUp(): void
    {   
        $this->login = new mockingjay\login();
    }
    public function testSignInSuccess()
    {
        $email = "arun@gmail.com";
        $password = "EL9ET";
        $this->assertEquals('success',$this->login->userlogin($email,$password));
    }
    public function testSignInFail()
    {
        $email = "raja@gmail.com";
        $password = "EL9ET";
        $this->assertEquals('failure',$this->login->userlogin($email,$password));
    }
    public function testEmptyFields()
    {
        $email = "";
        $password = "";
        $this->assertEquals('empty',$this->login->userlogin($email,$password));
    }
}

?>