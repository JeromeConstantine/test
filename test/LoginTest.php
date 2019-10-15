<?php
namespace App\Lib1;
include ('../src/login.php');
echo \App\Lib1\login::userlogin("venkat@test.com","123");
//use \cine\login :: userlogin();
use PHPUnit\Framework\TestCase;

class loginTest extends TestCase{
    
    protected $login;
    
    public function setUp(): void
    {
        $this->login = new login();
    }
    
    public function testlogin()
    {
        $email = "venkat@test.com";
        $password = "123";
        $this->assertEquals(1,$this->login->userlogin($email,$password));
    }
}

?>